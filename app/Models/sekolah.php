<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;
	
    protected $fillable = [
        'nama_sekolah',
        'hastag_kategori',
        'alamat_sekolah',
        'koordinat_gps',
        'kebutuhan_tenagakerja',
        'informasi_lainnya',
        'gambar',
        'status',
        'jurusan',
    ];		
	
}
