<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Footer;
use Image;
use Illuminate\Support\Facades\Storage;
class FooterController extends Controller
{




   public function index(){

   	$footer=\App\Footer::get(); 
   	$footer_images=\App\FooterImgs::get();
 
    if(count($footer)!=1||count($footer_images)!=6)
    {


    	$footer=\App\footer::where('id','<>','0')->delete();
        $footer=\App\footer::create([
            'text'=>'',
            'facebook'=>'',
            'twitter'=>'',
            'linkedin'=>'',
            'instagram'=>'',
            'bio'=>'',
            'code'=>'',
        ]);

       	$footer_images=\App\FooterImgs::where('id','<>','0')->delete();


        $footer_imagesx=\App\FooterImgs::get();
        if(count($footer_imagesx)!=6)
        {
        	for($i=0;$i<6;$i++)
        	{
	        	$footer_images=\App\FooterImgs::create([
	        		'path'=>'',
	        		'title_ar'=>'',
	        		'title_en'=>'',
	        		'link'=>'',
	        	]);
        	}
        }


        $footer=\App\Footer::get(); 
        $footer_images=\App\FooterImgs::get();
        return view('admin.footer.index',compact('footer','footer_images'));
      }  


    $footer=\App\Footer::get(); 
    $footer_images=\App\FooterImgs::get();
    return view('admin.footer.index',compact('footer','footer_images'));


   	
   }














   public function update(Request $request,Footer $footer)
   {
 
    //return   $request->path;

    if(isset($request->path))
    foreach ($request->path as $key => $value) {
        /*echo $value . " in " . $key . ", ";
*/

        if($request->path[$key]!=null)
        {


        $image_delete=\App\FooterImgs::where('id',$request->img_id[$key])->get()->first();
         
        @unlink(public_path($image_delete['path']));
       

      
     
        



          $img_name =uniqid(). time() . '.' . $request->path[$key]->getClientOriginalExtension();
           Image::make($request->path[$key])->resize(90,null ,function ($constraint) {
                            $constraint->aspectRatio();
                        })
            ->encode('jpg',75)
            ->save(public_path('/images/site_images/' . $img_name));

            $img_id=\App\FooterImgs::where('id',$request->img_id[$key])->update([
              'path'=>'/images/site_images/'.$img_name
            ]);
        }


        


    }


/*    for($i=0;$i< isset($request->path)&&count( $request->path) ;$i++)
    {

      
      if($request->path[$i]!=null)
      {
        $img_name =uniqid(). time() . '.' . $request->path[$i]->getClientOriginalExtension();
         Image::make($request->path[$i])->resize(90,null ,function ($constraint) {
                          $constraint->aspectRatio();
                      })
          ->encode('jpg',75)
          ->save(public_path('images/site_images/' . $img_name));

          $img_id=\App\FooterImgs::where('id',$request->img_id[$i])->update([
            'path'=>$img_name
          ]);
      }


    }*/



    for($i=0;$i<count($request->title_ar);$i++)
    {
          $img_id=\App\FooterImgs::where('id',$request->img_id[$i])->update([
            'title_ar'=>$request->title_ar[$i]
          ]);
    }



    for($i=0;$i<count($request->title_en);$i++)
    {
          $img_id=\App\FooterImgs::where('id',$request->img_id[$i])->update([
            'title_en'=>$request->title_en[$i]
          ]);
    }

    for($i=0;$i<count($request->title_en);$i++)
    {
          $img_id=\App\FooterImgs::where('id',$request->img_id[$i])->update([
            'link'=>$request->link[$i]
          ]);
    }



    $footer->update($request->all());




     return redirect('/admin/footer')
      ->with('data',
       ['alert'=>'تم التحديث بنجاح','alert-type'=>'success']
      );
    } 
    //return $request;
  



}
