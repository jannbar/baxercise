<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'title' => 'Pflaumen pflücken',
            'reps' => '2x 12',
        ],
        [
            'title' => 'Winkende Füße',
            'reps' => '2x 30sek',
        ],
        [
            'title' => 'Krokodil',
            'reps' => '2x 10',
        ],
        [
            'title' => 'Plank',
            'reps' => '2x 30sek',
        ],
        [
            'title' => 'Sitzende Drehung',
            'reps' => '2x 12',
        ],
        [
            'title' => 'Sitzende Verneigung',
            'reps' => '2x 30sek',
        ],
    ];
}
