<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cells</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h1>Dashboard</h1>
@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<div class="grid-container">
    @foreach($cells as $cell)
        <div class="cell">
            @if ($cell->link)
                <p><strong>{{ $cell->title }}</strong></p>

                <a href="{{ $cell->link }}" target="_blank" class="link-button" style="background: {{$cell->color}};border: 1px solid {{$cell->color}};">
                   +
                </a>
            <div class="buttons-grid">
                <form method="POST" action="{{ route('cells.deleteLink', $cell->id) }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="remove-button">
                        Delete
                    </button>
                </form>
                <a href="{{ route('cells.editLink', $cell->id) }}"  class="edit-button">
                    Edit
                </a>
            </div>
            @else
                <a href="{{ route('cells.edit', $cell->id) }}" class="add-button">
                    Add Link
                </a>
            @endif
        </div>
    @endforeach
</div>

</body>
</html>

