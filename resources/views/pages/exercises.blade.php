<?php
use App\Models\Exercise;
use function Livewire\Volt\{computed};

$exercises = computed(function () {
    return Exercise::orderBy('title')->get();
})->persist();
?>

<x-layout>
    <h2>Alle Übungen</h2>

    @volt
        <ul>
            @foreach ($this->exercises as $exercise)
                <li>
                    <span>{{ $exercise->title }} ({{ $exercise->reps }})</span>
                    @if ($exercise->description)
                        <span style="display: block"><small>{{ $exercise->description }}</small></span>
                    @endif
                </li>
            @endforeach
        </ul>
    @endvolt
</x-layout>
