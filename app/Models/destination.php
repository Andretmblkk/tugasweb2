<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'destinations_card';

    // Menentukan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'description',
        'image_url',
        'rating',
        'price',
        'price_unit',
        'created_at',
        'updated_at'
    ];
}