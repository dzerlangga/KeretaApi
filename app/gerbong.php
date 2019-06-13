<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gerbong extends Model
{
    protected $table = "gerbong";
    protected $fillable = ['id','no_rangkaian','id_kereta'];
}
