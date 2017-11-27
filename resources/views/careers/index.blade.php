

@forelse($careers as $career)

<p>{{ $career -> name }}</p>

    @forelse ($career -> courses as $course)
    <li>{{ $course -> name }}</li>
    @empty
    @endforelse

@empty
@endforelse