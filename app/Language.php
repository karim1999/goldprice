<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['lang_name','rtl','shortcut_name'];

    public function text()
    {
        return $this->hasOne('App\Text');
    }

}
