<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class palanggan extends Model
{
    //
    protected $table = 'palanggans';
    protected $fillable = [
        'nama_pelanggan',
         'telp',
          'jenis_kelamin',
           'alamat', 
           'kota', 
           'provinsi'
        ];
}
