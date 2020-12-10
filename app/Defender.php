<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defender extends Model
{
    protected $fillable  = ['nama_pemain', 'nomer_pemain', 'penampilan', 'goal', 'assist', 'tackles', 'interceptions', 'gambar', 'position'];
}
