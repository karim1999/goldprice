<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public $table="pagecontents";



    protected $fillable = [
        'page_id', 'language_id', 'tittle','contet'
    ];

}
