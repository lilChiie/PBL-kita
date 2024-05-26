<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsultasi';
    protected $primaryKey = 'konsultasi_id';

    public $timestamps = false;

    // Kolom-kolom yang dapat diisi secara massal (fillable)
    protected $fillable = [
        'title',
        'content',
        'photo',
    ];
}
