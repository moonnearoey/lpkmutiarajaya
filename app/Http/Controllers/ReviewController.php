<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Menampilkan formulir ulasan
    public function create()
    {
        return view('reviews.create');
    }

    // Menyimpan ulasan ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|max:255',
            'rating' => 'required|integer|between:1,5',
            'komentar' => 'required|max:500',
        ]);

        // Simpan ulasan ke database
        Review::create([
            'nama' => $request->nama,
            'rating' => $request->rating,
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Ulasan berhasil disubmit!');
    }

    // Menampilkan semua ulasan
    public function index()
    {
        $reviews = Review::latest()->get(); // Ambil ulasan terbaru
        return view('reviews.index', compact('reviews'));
    }
}
