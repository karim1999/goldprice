<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{

	protected $fillable = [
        'logo', 'icon', 'tittle','subtittle', 'description', 'verification_google_code','analysis_google_code',
    ];
 

   public $table='seo';
}
