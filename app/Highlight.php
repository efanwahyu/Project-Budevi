<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $fillable = ['judul', 'isi_highlight', 'gambar', 'link_video'];
}
