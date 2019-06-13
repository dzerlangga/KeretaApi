<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rangkaian extends Model
{
	protected $table = "rangkaian";
    protected $fillable = ['id','no_rangkaian','id_kereta'];
}
