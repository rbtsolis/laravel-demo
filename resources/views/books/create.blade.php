@extends('layouts.app')


@section('content')

<div class="row">
<div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
    <div class="panel-heading">Create Book</div>
    <div class="panel-body">
      <form method="POST" action="/books/" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Name</label>
          <div class="col-md-6">
            <input type="text" name="name" id="name" placeholder="Name:" autofocus="autofocus" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="year" class="col-md-4 control-label">Year</label>
          <div class="col-md-6">
            <input type="text" name="year" id="year" placeholder="Year:" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="year" class="col-md-4 control-label">Authors</label>
          <div class="col-md-6">
            <select name="authors[]" multiple class="form-control">
            @forelse($authors as $author)
                <option value="{{ $author -> id }}">{{ $author -> first_name }} {{ $author -> last_name }}</option>
            @empty
            @endforelse
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
              Create Book
            </button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

@stop