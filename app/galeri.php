<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = ['judul', 'users_id', 'kategori_galeri_id'];
}
