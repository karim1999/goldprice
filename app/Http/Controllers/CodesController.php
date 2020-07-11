<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Seo;
class CodesController extends Controller
{
    public function index()
    {
       
        $seo=\App\Seo::get()->first();  
        if(count((array)$seo) ==0)
        {

            $seo=\App\Seo::create([
                'logo'=>'',
                'icon'=>'',
                'tittle'=>'',
                'subtittle'=>'',
                'description'=>'',
                'verification_google_code'=>'',
                'analysis_google_code'=>'',
            ]);
            return view('admin.codes.index',compact('seo'));
          }    
        return view('admin.codes.index',compact('seo'));
        
    }




    public function update(Request $request, Seo $seo)
    {



    $seo=\App\Seo::where('id',$request->id)->update([
        'verification_google_code'=>$request->verification_google_code,
        'analysis_google_code'=>$request->analysis_google_code,
    ]);
   /* $seo->update([
        'verification_google_code'=>$request->verification_google_code,
        'analysis_google_code'=>$request->analysis_google_code,
    ]);*/

  
    return redirect('/admin/codes')
      ->with('data',
       ['alert'=>'تم التحديث بنجاح','alert-type'=>'success']
      );
    }



}
