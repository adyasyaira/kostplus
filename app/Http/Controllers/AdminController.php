<?php

namespace App\Http\Controllers;
use App\Models\Kos;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $list_data = DB::table('kos')
                    ->select('nama_kos', 'alamat_kos', 'status_kos', 'jenis_kos')
                    ->get();    
        return view('admin/admin', compact('list_data'));   
    }

    public function create(){
        return view('admin/create');
    }

    public function store(Request $request){
        Kos::create($request->all());

        return redirect()->route('kos.list');
    }
    
    public function edit(string $id_kos){

        $list_data = Kos::findOrFail($id_kos);

        return view('admin.edit', compact('list_data'));

    }
}
