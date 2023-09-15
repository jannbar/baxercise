<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'title' => 'Pflaumen pflücken',
        ],
        [
            'title' => 'Winkende Füße',
        ],
        [
            'title' => 'Krokodil',
        ],
        [
            'title' => 'Plank',
        ],
    ];
}
