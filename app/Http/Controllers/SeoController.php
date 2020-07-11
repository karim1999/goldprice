<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Seo;
use Image;

class SeoController extends Controller
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
                'view_id'=>'',
                
                'analysis_google_code'=>'',
            ]);
            return view('admin.seo.index',compact('seo'));
          }    
        return view('admin.seo.index',compact('seo'));
        
    }

   /* public function edit($id)
    {
        
    }*/

    public function update(Request $request, Seo $seo)
    {

     
  



    if($request->logo!=null)
    {

        
        @unlink(public_path($seo->logo));
       $img_name =uniqid(). time() . '.' . $request->logo->getClientOriginalExtension();
       Image::make($request->logo)->resize(90,null ,function ($constraint) {
                        $constraint->aspectRatio();
                    })
        ->encode('jpg',75)
        ->save(public_path('images/site_images/' . $img_name));

        $seo->update([
            'logo'=>'/images/site_images/'.$img_name,

        ]);

     }
     if($request->icon!=null)
    {
        @unlink(public_path($seo->icon));
    $img_name =uniqid(). time() . '.' . $request->icon->getClientOriginalExtension();
    Image::make($request->icon)->resize(90,null ,function ($constraint) {
                    $constraint->aspectRatio();
                })
        ->encode('jpg',75)
        ->save(public_path('images/site_images/' . $img_name));
        $seo->update([
        'icon'=>'/images/site_images/'.$img_name,
        ]);
    }

                    

                     

    $seo->update([
        'tittle'=>$request->tittle,
        'subtittle'=>$request->subtittle,
        'description'=>$request->description,
        'view_id'=>$request->view_id,   
    ]);


    return redirect('/admin/seo')
      ->with('data',
       ['alert'=>'تم التحديث بنجاح','alert-type'=>'success']
      );
    }
 
}
