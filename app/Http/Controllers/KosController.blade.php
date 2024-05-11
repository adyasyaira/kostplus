<?php
// app/Http/Controllers/KosController.php

namespace App\Http\Controllers;

use App\Models\Kos;

class KosController extends Controller
{
    public function index()
    {
        $koses = Kos::with('kamars')->get();

        return view('koses.index', compact('koses'));
    }
}
