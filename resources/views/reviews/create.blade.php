<!-- resources/views/reviews/create.blade.php -->
@extends('layout.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berikan Ulasan Anda</title>
</head>

<body>
    <div class="container">
        <h2>Berikan Ulasan Anda</h2>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="1">1 - Sangat Buruk</option>
                    <option value="2">2 - Buruk</option>
                    <option value="3">3 - Cukup</option>
                    <option value="4">4 - Baik</option>
                    <option value="5">5 - Sangat Baik</option>
                </select>
            </div>

            <div class="form-group">
                <label for="komentar">Komentar:</label>
                <textarea id="komentar" name="komentar" rows="5" required></textarea>
            </div>

            <button type="submit">Kirim Ulasan</button>
        </form>
    </div>
</body>

</html>
