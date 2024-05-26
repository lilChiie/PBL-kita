<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = 'pertanyaan';

    protected $primaryKey = 'pertanyaan_id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'pertanyaan'
    ];
}
