<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'music';
    public $fillable = ['author', 'albumTitle', 'year'];
}