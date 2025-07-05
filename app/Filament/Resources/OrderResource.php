<?php

namespace App\Filament\Resources;

use App\Enums\Order\OrderPurpose;
use App\Enums\OrderStatus;
use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationLabel = 'Замовлення';

    protected static ?string $label = 'Замовлення';

    protected static ?string $pluralLabel = 'Замовлення';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->searchable()->label('ID'),

                TextColumn::make('purpose')->badge(OrderPurpose::class)->sortable()->label('Мета'),

                TextColumn::make('city')->default('Не вказано')->searchable()->label('Місто'),

                TextColumn::make('phone')
                    ->default('Не вказано')
                    ->copyable()
                    ->copyMessage('Телефон скопійований')
                    ->searchable()
                    ->label('Телефон'),

                TextColumn::make('email')
                    ->default('Не вказано')
                    ->copyable()
                    ->copyMessage('Пошта скопійована')
                    ->searchable()
                    ->label('Пошта'),

                TextColumn::make('status')->badge(OrderStatus::class)->sortable()->label('Статус'),

                TextColumn::make('created_at')->date()->alignEnd()->label('Дата'),
            ])
            ->defaultSort(function (Builder $query): Builder {
                return $query
                    // ->orderBy('status', 'asc')
                    ->orderBy('created_at', 'desc');
            })
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->modalWidth('2xl'),
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
                Grid::make(4)->schema([
                    TextEntry::make('purpose')
                        ->badge(OrderPurpose::class)
                        ->label('Мета заявки'),

                    TextEntry::make('id')
                        ->copyable()
                        ->copyMessage('ID номер замовлення скопійовано')
                        ->label('ID номер'),

                    TextEntry::make('created_at')
                        ->label('Дата/Час'),

                    TextEntry::make('status')
                        ->badge(OrderStatus::class)
                        ->label('Статус'),
                ]),

                Grid::make(2)->schema([
                    TextEntry::make('name')
                        ->default('не вказано')
                        ->label('Ім`я'),

                    TextEntry::make('city')
                        ->label('Місто'),
                ]),

                Grid::make(2)->schema([
                    TextEntry::make('phone')
                        ->copyable()
                        ->copyMessage('Номер телефону скопійовано')
                        ->label('Телефон'),

                    TextEntry::make('email')
                        ->default('не вказано')
                        ->copyable()
                        ->copyMessage('E-Mail скопійовано')
                        ->label('Пошта'),
                ]),

                TextEntry::make('description')
                    ->columnSpanFull()
                    ->default('не вказано')
                    ->columnSpanFull()
                    ->label('Повідомлення'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
        ];
    }
}
