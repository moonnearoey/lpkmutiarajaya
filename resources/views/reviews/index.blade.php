<!-- resources/views/reviews/index.blade.php -->
@extends('layout.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Pelatihan</title>
</head>

<body>
    <div class="container">
        <h2>Ulasan Pelatihan</h2>
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        @foreach ($reviews as $review)
            <div class="review">
                <h4>{{ $review->nama }} - {{ str_repeat('⭐', $review->rating) }}</h4>
                <p>{{ $review->komentar }}</p>
                <small>Ditambahkan pada: {{ $review->created_at->format('d M Y H:i') }}</small>
                <hr>
            </div>
        @endforeach
    </div>
</body>

</html>
