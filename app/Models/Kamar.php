<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';
    protected $primaryKey = 'id_kamar';

    protected $fillable = ['nama_kamar', 'jumlah_kosong', 'harga_kamar', 'deskripsi_kamar', 'jenis_kamar'];

    public $timestamps = false;
}
