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
        <x-exercises :exercises="$this->exercises" />
    @endvolt
</x-layout>
