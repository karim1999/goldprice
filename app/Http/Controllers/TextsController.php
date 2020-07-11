<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Text;

class TextsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts=\App\Text::all();
        return view('admin.texts.index',compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $language=\App\Language::where('id',$request->language_id)->get()->first();
        if($language)
         return view('admin.texts.create',compact('language'));
        else
            return redirect('/admin/texts')
                  ->with('data',
                   ['alert'=>'برجاء التأكد من وجود اللغة قبل اضافة نصوصها','alert-type'=>'danger']
                  );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $text=\App\Text::create($request->all());
         if($text)
           return redirect('/admin/texts')
                  ->with('data',
                   ['alert'=>'تم اضافة نصوص اللغة بنجاح','alert-type'=>'success']
                  );
        else
             return redirect('/')
                  ->with('data',
                   ['alert'=>'حدث خطأ في المصادقة','alert-type'=>'danger']
                  );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Text $text)
    {
        
        return view('admin.texts.edit',compact('text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
    {
       
        $text->update($request->all());
        return redirect('/admin/texts')
                  ->with('data',
                   ['alert'=>'تمت العملية بنجاح','alert-type'=>'success']
                  );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
       $text->delete();
       return redirect('/admin/texts')
                  ->with('data',
                   ['alert'=>'تمت العملية بنجاح','alert-type'=>'success']
                  );
    }
}
