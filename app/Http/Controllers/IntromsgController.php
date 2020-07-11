<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Setting;
class IntromsgController extends Controller
{


    public function index(Request $request)
    {

    	$languages=\App\Language::all();
    	$test_lang_exsist=\App\Language::where('id',$request->language)->get()->first();
    	if(!isset($test_lang_exsist->id)){

    		return view('admin.settings.intromsg.index',compact('languages'));
    	}

    	$intromsg=\App\Setting::where('language_id',$request->language)->where('type','intromsg')->get()->first();
     
    	if(!isset($intromsg->id))
    	{	 
    		$intromsg=\App\Setting::create([
    			'language_id'=>$request->language,
                'type'=>'intromsg'
    		]);
    	}
        $intromsg=\App\Setting::where('language_id',$request->language)->where('type','intromsg')->get()->first();

    
    	return view('admin.settings.intromsg.index',compact('languages','intromsg'));
    }

    public function update(Request $request,Setting $setting)
    {


        $set=\App\Setting::where('id',$request->id)->update([
            'title'=>$request->title,
            'status'=>$request->status,
            'html'=>$request->html,
            'css'=>$request->css,
            'js'=>$request->js,
        ]);
        return redirect()->back()->with('data',['alert-type'=>'success','alert'=>'تم التحديث بنجاح']);
    }




}
