<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaanBahan extends Model
{
    use HasFactory;


    protected $fillable = [
        'bahan_id',
        'kuantitas_digunaan',
        'qty'

    ];

    public function bahan()
    {
        return $this->belongsTo(Bahan::class);
    }
}
