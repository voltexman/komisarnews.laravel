<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use Filament\Actions;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\IconSize;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Contracts\View\View;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected static ?string $title = 'Статті';

    public function getHeader(): ?View
    {
        return view('filament.resources.pages.headers');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make('create')
                ->icon('heroicon-m-plus')
                ->iconSize(IconSize::Small)
                ->label('Додати'),

            Actions\Action::make('updateMeta')
                ->fillForm(fn (): array => [
                    'title' => fake()->sentence(),
                    'robots' => 'noindex, nofollow',
                    'description' => fake()->sentence(),
                ])
                ->form([
                    TextInput::make('title')
                        ->label('Заголовок')
                        ->prefixIcon('heroicon-o-window')
                        ->prefixIconColor('primary')
                        ->maxLength(120)
                        ->hint('Meta title')
                        ->required(),

                    Select::make('robots')
                        ->options([
                            'index, follow' => 'Індексувати сторінку, індексувати статті',
                            'noindex, follow' => 'Не індексувати сторінку, індексувати статті',
                            'index, nofollow' => 'Індексувати сторінку, не індексувати статті',
                            'noindex, nofollow' => 'Не індексувати сторінку, не індексувати статті',
                        ])->label('Індексація')
                        ->prefixIcon('heroicon-o-globe-alt')
                        ->prefixIconColor('primary')
                        ->native(false),

                    Textarea::make('description')->rows(5)
                        ->hint('Meta Description')
                        ->label('Опис')
                        ->maxLength(200)
                        ->extraAttributes(['style' => 'resize: none']),
                ])
                ->action(function (Post $record): void {
                    $record->approve();
                })
                ->after(fn () => Notification::make()
                    ->title('ok')
                    ->success()
                    ->send())
                ->closeModalByClickingAway(false)
                ->modalSubmitActionLabel('Зберегти')
                ->modalAlignment(Alignment::Center)
                ->modalWidth(MaxWidth::Medium)
                ->icon('heroicon-m-cog-8-tooth')
                ->iconSize(IconSize::Small)
                ->label('Параметри'),
        ];
    }
}
