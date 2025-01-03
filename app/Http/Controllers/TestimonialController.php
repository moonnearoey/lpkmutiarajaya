<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function showForm()
    {
        return view('add-testimonial'); // Untuk menampilkan form tambah ulasan
    }

    public function submitTestimonial(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'graduation_year' => 'required|date_format:Y',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload foto jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
        }

        // Simpan ke database
        // Menyimpan data ulasan ke dalam database
        Testimonial::create([
            'name' => $request->input('name'),
            'testimonial' => $request->input('testimonial'),
            'graduation_year' => $request->input('graduation_year'),
            'image' => $imagePath,
        ]);


        return redirect()->route('testimonial.show')->with('success', 'Ulasan berhasil ditambahkan!');
    }

    public function showTestimonials()
    {
        $testimonials = Testimonial::all(); // Mengambil semua data testimonial
        return view('testimonials', compact('testimonials'));
    }

}
