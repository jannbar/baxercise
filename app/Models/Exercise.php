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
            'description' => null,
        ],
        [
            'title' => 'Winkende Füße',
            'reps' => '2x 30sek',
            'description' => null,
        ],
        [
            'title' => 'Krokodil',
            'reps' => '2x 10',
            'description' => null,
        ],
        [
            'title' => 'Plank',
            'reps' => '2x 30sek',
            'description' => null,
        ],
        [
            'title' => 'Sitzende Drehung',
            'reps' => '2x 12',
            'description' => null,
        ],
        [
            'title' => 'Sitzende Verneigung',
            'reps' => '2x 30sek',
            'description' => null,
        ],
        [
            'title' => 'Zehen & Fersen',
            'reps' => '2x 15',
            'description' => null,
        ],
        [
            'title' => 'Knie zur Wand',
            'reps' => '2x 10 – 5sek halten',
            'description' => null,
        ],
        [
            'title' => 'Entspannte Hüften',
            'reps' => '3x 30sek',
            'description' => 'Knie ineinander fallen lassen und Hüfte abwechselnd nach links und rechts rotieren.',
        ],
        [
            'title' => 'Plankengang',
            'reps' => '3x 30sek',
            'description' => null,
        ],
    ];
}
