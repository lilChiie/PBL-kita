<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akademi extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $primaryKey = 'kegiatan_id';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'photo',
        'location',
        'price',
        'slot',
        'date',
        'category'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'pembayaran', 'kegiatan_id', 'user_id');
    }
}
