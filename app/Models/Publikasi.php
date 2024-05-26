<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;

    use HasFactory;

    // Nama tabel yang akan digunakan oleh model
    protected $table = 'publikasi';
    protected $primaryKey = 'publikasi_id';

    public $timestamps = false;

    // Kolom-kolom yang dapat diisi secara massal (fillable)
    protected $fillable = [
        'title',
        'content',
        'photo',
    ];
}
