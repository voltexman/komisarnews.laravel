<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $items = [
            [
                'label' => 'Головна',
                'url' => route('main'),
                'icon' => 'home',
            ],
            [
                'label' => 'Статті',
                'url' => route('articles.list'),
                'icon' => 'newspaper',
            ],
            [
                'label' => 'Контакти',
                'url' => route('contacts.show'),
                'icon' => 'contact',
            ],
        ];

        return view('components.menu', ['items' => $items]);
    }
}
