@extends('layouts.app')


@section('content')

@forelse ($students as $student)
<div>

<p>ID: {{ $student -> id }}</p>
<p>ID Card: {{ $student -> id_card }}</p>
<p>First Name: {{ $student -> first_name }}</p>
<p>Last Name: {{ $student -> last_name }}</p>
<p>Career: {{ $student -> career -> name }}</p>

</div>
<hr>
@empty
@endforelse

@stop