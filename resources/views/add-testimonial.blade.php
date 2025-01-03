@extends('layout.navbar')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


@section('body')
    <!-- resources/views/add-testimonial.blade.php -->
    <div class="container mt-5">
        <h2>Tambah Ulasan</h2>
        <form action="{{ route('submitTestimonial') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="testimonial" class="form-label">Ulasan</label>
                <textarea class="form-control" id="testimonial" name="testimonial" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="graduation_year" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" id="graduation_year" name="graduation_year" required>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
        </form>
    </div>
@endsection
