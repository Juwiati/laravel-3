<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['judul','users_id','kategori_pengumuman_id'];
}
