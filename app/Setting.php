<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    
    public $table='settings';
    protected 
    $fillable= ["language_id",'title','status','html','css','js','type'];
 

}
