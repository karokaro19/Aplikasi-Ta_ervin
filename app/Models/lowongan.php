<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = [
        'nama_sekolah',
        'matapel',
        'kebutuhan',
        'status',
    ];

    public function foreign_sekolah()
    {
        // Data model Lowongan dimiliki oleh model Sekolah melalui foreign key 'sekolah' dengan relasi belongsTo
        return $this->belongsTo(Sekolah::class, 'sekolah');
    }
}
