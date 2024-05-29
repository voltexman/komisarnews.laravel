<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Enums\MetaPages;
use App\Models\Meta;
use Filament\Actions;
use Illuminate\Contracts\View\View;
use Filament\Support\Enums\IconSize;
use Filament\Support\Enums\MaxWidth;
use Filament\Forms\Components\Select;
use Filament\Support\Enums\Alignment;
use Filament\Forms\Components\Textarea;
use App\Filament\Resources\PostResource;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

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
                ->model(Meta::class)
                ->record(Meta::query()->firstWhere('page', MetaPages::POSTS))
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
                            'index, follow' => 'Відкрити сторінку, відкрити статті',
                            'noindex, follow' => 'Закрити сторінку, відкрити статті',
                            'index, nofollow' => 'Відкрити сторінку, закрити статті',
                            'noindex, nofollow' => 'Закрити сторінку, закрити статті',
                        ])->label('Індексація')
                        ->prefixIcon('heroicon-o-globe-alt')
                        ->prefixIconColor('primary')
                        ->native(false),

                    Textarea::make('description')->rows(5)
                        ->hint('Meta Description')
                        ->label('Опис')
                        ->maxLength(200)
                ])
                ->fillForm(fn (Meta $record): array => [
                    'title' => $record->title,
                    'description' => $record->description,
                    'robots' => $record->robots,
                ])
                ->action(function (Meta $record, array $data): void {
                    $record->update($data);
                })
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title('Успішно збережено')
                        ->body('Налаштування сторінки збережені'),
                )
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
