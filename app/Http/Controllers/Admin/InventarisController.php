<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bahan;
use App\Models\Inventaris;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.inventaris.index');
    }

    public function cart()
    {
        $bahan = Bahan::all()->map(function ($item) {
            $currentDate = now();
            $expiryDate = $item->tanggal_kadaluarsa;

            // Tentukan status
            if ($currentDate->greaterThanOrEqualTo($expiryDate)) {
                $status = 'Kadaluarsa';
            } else {
                $status = 'Segar';
            }

            // Tambahkan status ke dalam item
            $item->status = $status;

            return $item;
        });

        return view('admin.inventaris.cart', compact('bahan'));
    }
}
