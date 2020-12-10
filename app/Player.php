<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable  = ['nama_pemain', 'nomer_pemain', 'penampilan', 'goal', 'assist', 'shot', 'shot_ontarget', 'gambar', 'position'];
}
