<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Menu\Laravel\Facades\Menu;

// use Spatie\Menu\Laravel\Menu;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // FIXME: зробити щоб <li> не мали зайвих класів
        // Зараз до активного тегу додається 'active exact-active'
        Menu::macro('main', function () {
            return Menu::new()
                ->addClass('rounded-3')
                ->link(route('main.show'), 'Головна')
                ->link(route('articles.list'), 'Статті')
                ->link(route('contacts.show'), 'Контакти')
                ->setActiveFromRequest()
                ->each(function ($item) {
                    $item->addClass('nav-link');
                    if ($item->isActive()) {
                        $item->addClass('active');
                    }
                });
        });
    }
}
