<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
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
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\IconColumn\IconColumnSize;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextColumn\TextColumnSize;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Статті';

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
                                ->disk('media')
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
                                ->live(debounce: 1500)
                                ->afterStateUpdated(function (Set $set, $operation, $state) {
                                    if ($operation === 'edit') return;
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

                        SpatieTagsInput::make('tags')->type('posts')->label('Теги')->rules(['max:8'])
                            ->hidden(fn (Get $get) => $get('category') === Post::CATEGORY_CITIES)
                            ->required()->validationMessages([
                                'required' => 'Необхідно вказати декілька тегів'
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
                Grid::make(['lg' => 8])->schema([
                    SpatieMediaLibraryImageColumn::make('image')
                        ->collection('posts')
                        ->conversion('preview')
                        ->defaultImageUrl(url('images/bg-header.webp'))
                        ->square()
                        ->width(90)
                        ->height(60)
                        ->grow(false)
                        ->visibleFrom('lg')
                        ->extraAttributes(['class' => 'rounded-lg overflow-hidden']),

                    Stack::make([
                        TextColumn::make('name')->searchable(),
                        TextColumn::make('slug')
                            ->size(TextColumnSize::ExtraSmall)
                            ->color('gray')
                            ->visibleFrom('lg'),
                    ])->columnSpan(3),

                    Stack::make([
                        Split::make([
                            TextColumn::make('created_at')
                                ->size(TextColumnSize::ExtraSmall)
                                ->date('d.m.Y')
                                ->grow(false),
                            TextColumn::make('created_at')
                                ->size(TextColumnSize::ExtraSmall)
                                ->time('H:m')
                                ->grow(false),
                            TextColumn::make('category')
                                ->size(TextColumnSize::ExtraSmall)
                                ->weight(FontWeight::SemiBold)
                                ->color('primary')
                                ->grow(false),
                            IconColumn::make('is_published')
                                ->trueIcon('heroicon-o-eye')
                                ->falseIcon('heroicon-o-eye-slash')
                                ->size(IconColumnSize::Small)
                                ->grow(false)
                                ->boolean(),
                            IconColumn::make('is_indexing')
                                ->trueIcon('heroicon-o-document-magnifying-glass')
                                ->falseIcon('heroicon-o-document-minus')
                                ->size(IconColumnSize::Small)
                                ->boolean(),
                        ])->hiddenFrom('lg'),
                    ]),

                    Split::make([
                        TextColumn::make('category')
                            ->badge()
                            ->color('primary')
                            ->extraAttributes(['class' => 'self-center']),
                    ])->visibleFrom('lg')->extraAttributes(['class' => 'flex h-full']),

                    Stack::make([
                        TextColumn::make('created_at')
                            ->icon('heroicon-o-calendar')
                            ->weight(FontWeight::Bold)
                            ->size(TextColumnSize::ExtraSmall)
                            ->date('d.m.y'),
                        TextColumn::make('created_at')
                            ->icon('heroicon-o-clock')
                            ->weight(FontWeight::Bold)
                            ->size(TextColumnSize::ExtraSmall)
                            ->time('H:m'),
                    ])->visibleFrom('lg')->view('filament.tables.columns.timestamp'),

                    Stack::make([
                        TextColumn::make('is_published')->badge()
                            ->state(function (Post $post): string {
                                return match ($post->is_published) {
                                    Post::PUBLISHED => 'Опубліковано',
                                    Post::HIDDEN => 'Приховано'
                                };
                            })
                            ->color(function (Post $post): string {
                                return match ($post->is_published) {
                                    Post::PUBLISHED => 'success',
                                    Post::HIDDEN => 'danger'
                                };
                            }),
                        TextColumn::make('is_indexing')->badge()
                            ->state(function (Post $post): string {
                                return match ($post->is_published) {
                                    Post::PUBLISHED => 'Індексується',
                                    Post::HIDDEN => 'Не індексується'
                                };
                            })->color(function (Post $post): string {
                                return match ($post->is_indexing) {
                                    Post::PUBLISHED => 'success',
                                    Post::HIDDEN => 'danger'
                                };
                            }),
                    ])
                        ->extraAttributes(['class' => 'space-y-2'])
                        ->visibleFrom('lg'),
                ]),
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
            ])->headerActions([
                //
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
