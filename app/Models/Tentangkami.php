<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentangkami extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan oleh model
    protected $table = 'tentangkami';
    protected $primaryKey = 'tentang_id';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'content',
        'photo'
    ];
}
