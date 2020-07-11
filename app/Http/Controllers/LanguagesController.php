<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Language;
class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages=\App\Language::all();

        return view('admin.languages.index',compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

         return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([]);


         $lang=\App\Language::create($request->all());
         if($lang)
           return redirect('/admin/languages')
                  ->with('data',
                   ['alert'=>'تم اضافة اللغة بنجاح','alert-type'=>'success']
                  );
        else
             return redirect('/')
                  ->with('data',
                   ['alert'=>'حدث خطأ في المصادقة','alert-type'=>'danger']
                  );
    }

 
   /* public function show(Language $language)
    {
       
    }
*/
 
    public function edit(Language $language)
    {
        return view('admin.languages.edit',compact('language'));
    }

 
    public function update(Request $request,Language $language)
    {
        $language->update($request->all());
       
           return redirect('/admin/languages')
                  ->with('data',
                   ['alert'=>'تمت العملية بنجاح','alert-type'=>'success']
                  );
 
    }
 
    public function destroy(Language $language)
    {
         $language->delete();
         return redirect()->back();
    }
}
