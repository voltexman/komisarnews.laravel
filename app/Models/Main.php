<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    public static $about = [
        [
            'icon' => '',
            'name' => '',
            'description' => '',
        ],
        [
            'icon' => '',
            'name' => '',
            'description' => '',
        ],
        [
            'icon' => '',
            'name' => '',
            'description' => '',
        ],
        [
            'icon' => '',
            'name' => '',
            'description' => '',
        ],
        [
            'icon' => '',
            'name' => '',
            'description' => '',
        ],
        [
            'icon' => '',
            'name' => '',
            'description' => '',
        ],
    ];

    public static $accordion = [
        [
            'heading' => 'Миття волосся',
            'icon' => 'washing',
            'content' => 'Попередньо необхідно вимити волосся шампунем, яким Ви зазвичай користуєтесь.',
        ],
        [
            'heading' => 'Сушка волосся',
            'icon' => 'dry',
            'content' => 'Просушити волосся без використання фена, дайте локонам висохнути природним шляхом.',
        ],
        [
            'heading' => 'Розчісування',
            'icon' => 'hairdresser',
            'content' => 'Розчесати пасма, щоб позбутися ковтунів (якщо такі є), також, запобігти подальшому заплутування.',
        ],
        [
            'heading' => 'Поділ волосся',
            'icon' => 'bunch',
            'content' => 'Розділити волосся на кілька пасів, обмотавши кілька разів, туго перетягнути кожну гумкою.',
        ],
        [
            'heading' => 'Зріз волосся',
            'icon' => 'cutting',
            'content' => 'Зробити зріз, відступивши кілька сантиметрів трохи вище кріплення та заплітаємо зрізане волосся в косу.',
        ],
        [
            'heading' => 'Оцінка волосся',
            'icon' => 'hair-info',
            'content' => 'Зважити зріз та сфотографувати біля сантиметра і надіслати дані для оцінювання.',
        ],
    ];
}
