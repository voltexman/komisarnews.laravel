<?php

namespace App\Filament\Resources;

use App\Enums\FeedbackStatus;
use App\Filament\Resources\FeedbackResource\Pages;
use App\Models\Feedback;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationLabel = 'Зворотній зв`язок';

    protected static ?string $label = 'Повідомлення';

    protected static ?string $pluralLabel = 'Повідомлення';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->icon('heroicon-o-user')
                    ->default('Не вказано')
                    ->searchable()
                    ->label('Ім`я'),

                TextColumn::make('contact')
                    ->icon('heroicon-o-identification')
                    ->default('Не вказано')
                    ->searchable()
                    ->label('Контакт'),

                TextColumn::make('created_at')
                    ->icon('heroicon-o-calendar-days')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->alignEnd()
                    ->label('Отримано'),

                TextColumn::make('status')
                    ->badge(FeedbackStatus::class)
                    ->sortable()
                    ->label('Статус'),
            ])
            ->defaultSort(function (Builder $query): Builder {
                return $query
                    ->orderBy('status', 'asc')
                    ->orderBy('created_at', 'desc');
            })
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->modalWidth('md'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')
                    ->default('не вказано')
                    ->label('Ім`я'),

                TextEntry::make('contact')
                    ->default('не вказано')
                    ->label('Контакт'),

                TextEntry::make('created_at')
                    ->label('Дата'),

                TextEntry::make('status')
                    ->badge(FeedbackStatus::class)
                    ->label(false),

                TextEntry::make('text')
                    ->columnSpanFull()
                    ->default('не вказано')
                    ->label('Повідомлення'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFeedback::route('/'),
        ];
    }
}
