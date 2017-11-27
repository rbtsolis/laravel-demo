<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/careers/" method="post">
    {{ csrf_field() }}
    
    <input type="text" name="name" placeholder="Name:">
    <textarea name="description" cols="30" rows="10" placeholder="Description:"></textarea>

    <select name="courses[]" placeholder="Select Courses" multiple>
    @forelse ($courses as $course)
        <option value="{{ $course -> id }}">{{ $course -> name }}</option>
    @empty
        <option value="0" disabled>No courses avalible</option>
    @endforelse
    </select>

    <button type="submit">Crear</button>
</form>
    
</body>
</html>