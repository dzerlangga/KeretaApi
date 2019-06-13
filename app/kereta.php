<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kereta extends Model
{
	protected $table = "kereta";
    protected $fillable= ['id','nama'];
}
