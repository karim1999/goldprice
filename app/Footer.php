<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{

	protected $fillable=["text",'facebook','twitter','linkedin','instagram','bio','code'];
    public $table="footer";
}
