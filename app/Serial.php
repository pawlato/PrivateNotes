<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    protected $table = 'serials';
    public $fillable = ['title', 'director', 'year'];
}