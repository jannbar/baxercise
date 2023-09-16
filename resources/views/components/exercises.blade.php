<ul>
    @foreach ($exercises as $exercise)
        <li>
            <span>{{ $exercise->title }} ({{ $exercise->reps }})</span>
            @if ($exercise->description)
                <span style="display: block"><small>{{ $exercise->description }}</small></span>
            @endif
        </li>
    @endforeach
</ul>
