<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midfilder extends Model
{
    protected $fillable  = ['nama_pemain', 'nomer_pemain', 'penampilan', 'goal', 'assist', 'passing', 'crossing', 'gambar', 'position'];
}
