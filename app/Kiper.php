<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiper extends Model
{
    protected $fillable  = ['nama_pemain', 'nomer_pemain', 'penampilan', 'saves', 'clearances', 'catches', 'goal_conceded', 'gambar', 'position'];
}
