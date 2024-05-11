<?php
// app/Models/Kos.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    protected $table = 'kos';
    protected $primaryKey = 'id_kos';

    protected $fillable = ['nama_kos', 'alamat_kos', 'status_kos', 'jenis_kos'];

    public $timestamps = false;

    
}
