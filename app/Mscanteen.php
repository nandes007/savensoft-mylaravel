<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mscanteen extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'kode';
    protected $keyType = 'string';
    protected $fillable = ['kode','namabarang','groups','price','gambar','descripsi']; 
}
