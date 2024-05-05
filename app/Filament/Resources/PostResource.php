<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $navigationLabel = 'Статті';

    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Main';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Зображення')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            //
                        ]),

                    Section::make('Параметри')
                        ->icon('heroicon-o-document-magnifying-glass')
                        ->schema([

                            TagsInput::make('tags'),

                            TextInput::make('keywords')
                                ->prefixIcon('heroicon-m-key'),

                            Textarea::make('description')
                                ->rows(4)
                                ->autosize(),

                            Toggle::make('status')
                                ->hint('Публікація')
                                ->onIcon('heroicon-m-bolt')
                                ->offIcon('heroicon-m-user'),

                            Toggle::make('indexation')
                                ->hint('Індексація')
                                ->onIcon('heroicon-m-bolt')
                                ->offIcon('heroicon-m-user'),
                        ]),
                ]),

                Section::make('Загальні дані')
                    ->icon('heroicon-o-document-text')
                    ->schema([

                        TextInput::make('name')
                            ->prefixIcon('heroicon-m-newspaper')
                            ->label('Назва статті')
                            ->placeholder('Назва статті')
                            ->required(),

                        TextInput::make('slug')
                            ->prefixIcon('heroicon-m-globe-alt')
                            ->label('Аліас')
                            ->required(),

                        TextInput::make('title')
                            ->prefixIcon('heroicon-m-window')
                            ->label('Заголовок статті')
                            ->required(),

                        Select::make('category')
                            ->options([
                                Post::CATEGORY_ARTICLES => 'Статті',
                                Post::CATEGORY_CITIES => 'Міста',
                            ]),

                        RichEditor::make('text')
                            ->toolbarButtons([
                                'attachFiles',
                                'bold',
                                'bulletList',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpanFull(),
                    ])->columnSpan(2)->columns(2),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('dsg'),

                TextColumn::make('category')
                    ->badge()
                    ->color('primary'),

                SelectColumn::make('status')
                    ->options([
                        Post::STATUS_ACTIVE => 'Активний',
                        Post::STATUS_INACTIVE => 'Не активний',
                    ])
                    ->rules(['required']),

                SelectColumn::make('indexation')
                    ->options([
                        Post::STATUS_INDEXATION => 'Індексується',
                        Post::STATUS_NO_INDEXATION => 'Не індексується',
                    ])
                    ->rules(['required']),

                TextColumn::make('created_at')
                    ->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
