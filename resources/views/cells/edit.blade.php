<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h1>Edit</h1>
<form method="POST" action="{{ route('cells.updateLink', $cell->id) }}" class="edit-form">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $cell->title }}" required>

    <label for="link">Link:</label>
    <input type="url" id="link" name="link" value="{{ $cell->link }}" required>

    <label for="color">Button Color:</label>
    <input type="color" id="color" name="color" value="{{ $cell->color }}">

    <button type="submit">Save</button>
</form>
</body>
</html>
