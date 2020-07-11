<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Setting;
class PopupController extends Controller
{


    public function index(Request $request)
    {

    	$languages=\App\Language::all();
    	$test_lang_exsist=\App\Language::where('id',$request->language)->get()->first();
    	if(!isset($test_lang_exsist->id)){

    		return view('admin.settings.popup.index',compact('languages'));
    	}

    	$popup=\App\Setting::where('language_id',$request->language)->where('type','popup')->get()->first();
     
    	if(!isset($popup->id))
    	{	 
    		$popup=\App\Setting::create([
    			'language_id'=>$request->language,
    			'type'=>'popup'
    		]);
    	}

    	$popup=\App\Setting::where('language_id',$request->language)->where('type','popup')->get()->first();
     
    	return view('admin.settings.popup.index',compact('languages','popup'));
    }

    public function update(Request $request,Setting $setting)
    {
 
       $set=\App\Setting::where('id',$request->id)->update([
            'type'=>$request->type,
            'title'=>$request->title,
            'status'=>$request->status,
            'html'=>$request->html,
            'css'=>$request->css,
            'js'=>$request->js,
        ]);
    	return redirect()->back()->with('data',['alert-type'=>'success','alert'=>'تم التحديث بنجاح']);
    }



}
