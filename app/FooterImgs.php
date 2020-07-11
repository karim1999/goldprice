<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterImgs extends Model
{

 

	protected $fillable=["path",'title_ar','title_en','link'];
    public $table="footerimages";
}
