<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['team_musuh', 'negara', 'liga', 'logo', 'date', 'status', 'score'];
}
