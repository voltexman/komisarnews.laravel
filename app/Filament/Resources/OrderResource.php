<?php

namespace App\Filament\Resources;

use App\Enums\Order\Goals;
use App\Enums\Order\Status;
use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms\Form;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\Split;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Замовлення';

    protected static ?string $label = 'Замовлення';

    protected static ?string $pluralLabel = 'Замовлення';

    protected static ?string $recordTitleAttribute = 'city';

    public static function getNavigationBadge(): ?string
    {
        return Order::query()->where('status', Status::NEW)->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'danger';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('number')
                    ->weight(FontWeight::Bold)
                    ->prefix('#')
                    ->numeric()
                    ->copyable()
                    ->copyMessage('Color code copied')
                    ->copyMessageDuration(500)
                    ->label(false),

                TextColumn::make('goal')
                    ->label('Замовлення')
                    ->searchable(),

                TextColumn::make('city')
                    ->icon('heroicon-o-map-pin')
                    ->searchable()
                    ->label('Місто'),

                TextColumn::make('phone')
                    ->icon('heroicon-o-phone')
                    ->searchable()
                    ->label('Телефон'),

                TextColumn::make('hair_length')
                    ->numeric()
                    ->sortable()
                    ->suffix('мм')
                    ->label('Довжина'),

                TextColumn::make('created_at')
                    ->label(false)
                    ->dateTime()
                    ->since(),

                TextColumn::make('status')->badge()->label(false),
            ])
            ->filters([
                SelectFilter::make('goal')->options(Goals::class)->native(false)->label('Замовлення'),
                SelectFilter::make('status')->options(Status::class)->native(false)->label('Статус'),
            ])
            ->actions([
                ViewAction::make()->label(false),
                DeleteAction::make()->label(false),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->recordClasses(fn (Order $record) => match ($record->status) {
                Status::NEW => 'bg-red300/10 font-semibold dark:bg-red-300/15',
                Status::CANCELED => 'opacity-75',
                default => null,
            })->striped();
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Fieldset::make('Дані замовника')
                    ->schema([
                        TextEntry::make('name')->label('Замовник'),
                        TextEntry::make('city')->label('Місто'),
                        TextEntry::make('email')->label('Пошта'),
                        TextEntry::make('phone')->label('Телефон'),
                    ])->columns(2),
                Fieldset::make('Характеристики волосся')
                    ->schema([
                        Split::make([
                            TextEntry::make('color')->label('Колір')->columnSpanFull(),
                            TextEntry::make('hair_options')->label('Опції')->columnSpanFull(),
                        ])->columnSpanFull(),

                        Split::make([
                            TextEntry::make('hair_weight')->label('Вага')->suffix('гр.'),
                            TextEntry::make('hair_length')->label('Довжина')->suffix('мм.'),
                            TextEntry::make('age')->label('Вік')->suffix('р.'),
                        ])->columns(3)->columnSpanFull(),

                        TextEntry::make('description')->label('Додатковий опис')->columnSpanFull(),
                    ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageOrders::route('/'),
        ];
    }
}
