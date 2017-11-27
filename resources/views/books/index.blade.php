@extends('layouts.app')


@section('content')

<a href="/books/create/">
    <button class="btn btn-primary">Agregar Libro</button>
</a>

@forelse ($books as $book)
<div>

<p>Name: {{ $book -> name }}</p>
<p>Year: {{ $book -> year }}</p>

    <strong>Authors</strong>
    @forelse ($book -> authors as $author)
    <li>{{ $author -> first_name }}</li>
    @empty
    @endforelse
</div>
<hr>
@empty
@endforelse



@stop
