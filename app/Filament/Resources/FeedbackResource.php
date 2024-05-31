<?php

namespace App\Filament\Resources;

use App\Enums\FeedbackStatus;
use App\Filament\Resources\FeedbackResource\Pages;
use App\Models\Feedback;
use Filament\Forms\Components\DatePicker;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Rupadana\FilamentCustomForms\Components\InputGroup;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?int $navigationSort = 3;

    protected static ?string $pluralLabel = 'Зворотній зв`язок';

    protected static ?string $label = 'Зворотній зв`язок';

    protected static ?string $navigationLabel = 'Зворотній зв`язок';

    public static function getNavigationBadge(): ?string
    {
        return Feedback::query()->where('status', FeedbackStatus::NEW)->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'danger';
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Відправник')
                    ->icon('heroicon-o-user')
                    ->iconColor('primary'),

                Tables\Columns\TextColumn::make('contact')
                    ->label('Контакт')
                    ->icon('heroicon-o-identification')
                    ->iconColor('primary'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата')
                    ->icon('heroicon-o-clock')
                    ->iconColor('primary')
                    ->sortable()
                    ->dateTime()
                    ->since(),

                Tables\Columns\TextColumn::make('status')->badge()->label(false),
            ])
            ->filters([
                Filter::make('created_at')
                    ->form([
                        InputGroup::make(2)
                            ->schema([
                                DatePicker::make('created_from')->native(false)->label(false)->prefix('Від')->placeholder('Оберіть дату'),
                                DatePicker::make('created_until')->native(false)->label(false)->prefix('До')->default(now()),
                            ]),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })->columnSpanFull(),
            ], layout: FiltersLayout::AboveContent)->filtersFormColumns(2)
            ->striped()
            ->actions([
                ViewAction::make()->label(false)
                    ->after(function (Feedback $record) {
                        $record->update(['status' => FeedbackStatus::VIEWED]);
                    }),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('name')->label('Відправник'),

                Infolists\Components\TextEntry::make('contact')->label('Контакт'),

                Infolists\Components\TextEntry::make('text')->label('Повідомлення')->columnSpanFull(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeedback::route('/'),
        ];
    }
}
