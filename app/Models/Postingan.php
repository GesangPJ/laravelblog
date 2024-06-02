<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// Class untuk mengambil data dari tabel Postingans
class Postingan extends Model
{
    // menentukan primary key yang diambil dari tabel postingans
    protected  $primaryKey = 'slug';
    protected $keyType = 'string';
}





