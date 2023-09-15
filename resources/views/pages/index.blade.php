<?php
use App\Models\Exercise;
use function Livewire\Volt\{computed};

$exercises = computed(function () {
    return Exercise::inRandomOrder()
        ->limit(4)
        ->get();
})->persist();
?>

<x-layout>
    <h2>Hier sind <mark>vier Übungen</mark> für deinen Rücken:</h2>

    @volt
        <ul>
            @foreach ($this->exercises as $exercise)
                <li>{{ $exercise->title }} ({{ $exercise->reps }})</li>
            @endforeach
        </ul>
    @endvolt
</x-layout>
