<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
   public $table="pagecontents";
   protected $fillable = [
   	'language_id',
   	'theme_title',
   	'annonce_title',
   	'goldprice_title',
   	'silverprice_title',
   	'latestnews_title',
   	'supportedcountries_title',
   	'rkmyfooter_title',
   	'privacytittle_title',
   	'privacy_title',
   	'termstittle_title',
   	'terms_title',
   	'notes' 
   ];

 
   public function language()
	{
	    return $this->belongsTo('App\Language', 'language_id');
	}
}
