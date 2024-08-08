<?php

namespace App\Filament\Resources;

use App\Enums\Post\Categories;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\Split as FormSplit;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextColumn\TextColumnSize;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Статті';

    protected static ?string $recordTitleAttribute = 'name';

    public static function getNavigationBadge(): ?string
    {
        return Post::query()->where('is_indexing', Post::NO_INDEXING)->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'gray';
    }

    public static function getGlobalSearchResultTitle(Model $record): string
    {
        return $record->title;
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'title', 'category'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Зображення')
                        ->icon('heroicon-o-photo')
                        ->description('Головне зображення статті')
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('image')
                                ->collection('posts')
                                ->conversion('preview')
                                ->disk('public')
                                ->imageEditor()
                                ->imageEditorMode(3)
                                ->image()
                                ->label(false),
                        ])->collapsible(),

                    Section::make('SEO оптимізація')
                        ->icon('heroicon-o-document-magnifying-glass')
                        ->description('Meta дані сторінки')
                        ->schema([
                            Textarea::make('description')->rows(4)->label('Опис')->hint('Meta description')
                                ->extraAttributes(['class' => 'resize-none']),

                            Toggle::make('is_published')
                                ->onIcon('heroicon-m-eye')
                                ->offIcon('heroicon-m-eye-slash')
                                ->label(fn (Get $get): string => $get('is_published') ? 'Опубліковано' : 'Приховано')
                                ->afterStateUpdated(fn (Set $set, bool $state) => $set('is_published', $state))
                                ->hint('Публікація')
                                ->live(),

                            Toggle::make('is_indexing')
                                ->onIcon('heroicon-m-document-magnifying-glass')
                                ->offIcon('heroicon-m-document-minus')
                                ->label(fn (Get $get): string => $get('is_indexing') ? 'Індексується' : 'Не індексується')
                                ->afterStateUpdated(fn (Set $set, bool $state) => $set('is_indexing ', $state))
                                ->hint('Індексація')
                                ->live(),
                        ])->collapsible(),
                ])->columnSpan(1),

                Section::make('Дані матеріалу')
                    ->icon('heroicon-o-window')
                    ->schema([
                        FormSplit::make([
                            TextInput::make('name')
                                ->label('Назва')
                                ->prefixIcon('heroicon-o-newspaper')
                                ->prefixIconColor('primary')
                                ->maxLength(100)
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(function (Set $set, $operation, $state) {
                                    if ($operation === 'edit') {
                                        return;
                                    }
                                    $set('slug', Str::slug($state, '_'));
                                }),

                            TextInput::make('slug')
                                ->label('Аліас')
                                ->prefixIcon('heroicon-o-globe-alt')
                                ->prefixIconColor('primary')
                                ->unique(ignoreRecord: true)
                                ->maxLength(255)
                                ->hint('Посилання'),
                        ])->from('lg'),

                        FormSplit::make([
                            TextInput::make('title')
                                ->label('Заголовок')
                                ->prefixIcon('heroicon-o-window')
                                ->prefixIconColor('primary')
                                ->maxLength(120)
                                ->hint('Title'),

                            Select::make('category')->options([
                                Post::CATEGORY_ARTICLES => 'Статті',
                                Post::CATEGORY_CITIES => 'Міста',
                            ])->label('Категорія')
                                ->prefixIcon('heroicon-o-rectangle-stack')
                                ->prefixIconColor('primary')
                                ->afterStateUpdated(fn (Set $set, $state) => $set('category', $state))
                                ->native(false)->live(),
                        ])->from('lg'),

                        SpatieTagsInput::make('tags')->label('Теги')->rules(['max:8'])
                            ->hidden(fn (Get $get) => $get('category') === Post::CATEGORY_CITIES)
                            ->required()->validationMessages([
                                'required' => 'Необхідно вказати декілька тегів',
                            ]),

                        RichEditor::make('body')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])->label(false)->extraAttributes(['class' => 'h-[400px]']),
                    ])->columnSpan(2),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('posts')
                    ->conversion('admin')
                    ->defaultImageUrl(url('images/bg-header.webp'))
                    ->width(90)
                    ->height(60)
                    ->grow(false)
                    ->visibleFrom('lg')
                    ->label(false),

                TextColumn::make('name')
                    ->label('Назва статті')
                    ->description(fn (Post $record): string => Str::limit($record->slug, 30))
                    ->searchable(),

                TextColumn::make('category')
                    ->badge()
                    ->color('primary')
                    ->label('Катагорія'),

                ToggleColumn::make('is_published')->sortable()->label('Публікація'),
                ToggleColumn::make('is_indexing')->sortable()->label('Індексація'),

                TextColumn::make('created_at')
                    ->weight(FontWeight::Bold)
                    ->size(TextColumnSize::ExtraSmall)
                    ->date('d.m.y')
                    ->label(false),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        Post::CATEGORY_CITIES => 'Міста',
                        Post::CATEGORY_ARTICLES => 'Статті',
                    ])->label('Категорія'),
                SelectFilter::make('is_published')
                    ->options([
                        Post::PUBLISHED => 'Опубліковано',
                        Post::HIDDEN => 'Приховано',
                    ])->label('Статус'),
                SelectFilter::make('is_indexing')
                    ->options([
                        Post::INDEXING => 'Індексується',
                        Post::NO_INDEXING => 'Не індексується',
                    ])->label('Індексація'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->size(ActionSize::Small)->label(false),
                Tables\Actions\EditAction::make()->size(ActionSize::Small)->label(false),
                Tables\Actions\DeleteAction::make()->size(ActionSize::Small)->label(false),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                //     Tables\Actions\ForceDeleteBulkAction::make(),
                //     Tables\Actions\RestoreBulkAction::make(),
                // ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
