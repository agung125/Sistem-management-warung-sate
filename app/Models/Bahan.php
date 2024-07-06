<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Bahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'satuan',
        'qty',
        'harga_persatuan',
        'tanggal_kadaluarsa',
    ];

    public function penggunaanbahan()
    {
        return $this->hasMany(PenggunaanBahan::class);
    }

    // Define an accessor for the 'tanggal_kadaluarsa' attribute
    public function getTanggalKadaluarsaFormattedAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_kadaluarsa'])->format('d M Y');
    }
}
