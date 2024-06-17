<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;
    protected $table = 'usaha';

    protected $fillable = [
        'user_id',
        'judul_usaha',
        'deskripsi_usaha',
        'target_biaya',
        'biaya',
        'jaminan',
        'tenggat',
        'pemodal',
    ];

    protected $casts = [
        'related_ids' => 'array',
    ];
}
