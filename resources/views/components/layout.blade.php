<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Baxercise</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="https://emojicdn.elk.sh/🤸‍♂️">

    @vite(['resources/css/pico.min.css', 'resources/css/app.css'])
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="/" class="secondary" wire:navigate>🤸‍♂️ Baxercise</a>
                    </li>
                </ul>
                <ul>
                    <li><a href="/exercises" class="secondary" wire:navigate>Alle Übungen</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
