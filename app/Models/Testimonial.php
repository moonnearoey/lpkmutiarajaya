<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Testimonial.php
class Testimonial extends Model
{
    protected $fillable = ['name', 'testimonial', 'graduation_year', 'image'];
}
