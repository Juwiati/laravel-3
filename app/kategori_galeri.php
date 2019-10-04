<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_galeri extends Model
{
    protected $fillable =['id', 'nama', 'keterangan', 'users_id', 'created_at'];
    protected $table = 'kategori_galeri';
}
