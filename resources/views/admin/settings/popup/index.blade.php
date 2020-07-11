@extends('const.const')
@section('content')

    <section class="viewTextsEdit">
        <h3 class="content-title d-flex">الرسالة المنبثقة
            <select class="form-control d-flex" style="max-width: 100%;width: 200px;margin-right: 3%;position: relative;top: -8px;" onchange="$(location).attr('href','/admin/popup?language='+$(this).val()); ">
                <option value="0">اختر اللغة</option>
                @foreach($languages as $language)
                    <option value="{{$language->id}}" @if(isset($popup['language_id'])&&$language->id==$popup['language_id']) selected="" @endif >{{$language->lang_name}}</option>
                @endforeach
            </select>
        </h3>

        @if(isset($popup))
            <form method="POST" action="{{route('popup.update',$popup['id'])}}">
                @csrf
                {{method_field('PATCH')}}
                <input type="hidden" name="language_id" value="{{$popup['language_id']}}">
                <input type="hidden" name="id" value="{{$popup['id']}}">
                <input type="hidden" name="type" value="popup">
                <div class="row buttons">
                    <div class="col-12 d-flex justify-content-between DeleteAdd subMenu">
                        <button type="submit" class="btn btn-success update subMenu" data-toggle="modal">
                            تعديل
                        </button>
                    </div>
                </div>
                <div class="languages col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center flat-card mb-4">
                            <div class="row w-100">
                                <div class="col-sm-12 col-md-6 d-flex align-items-center input">
                                    <div class="address ml-4 text-right">نوع الكود</div>
                                    <input type="text" class="form-control addressInput subMenu" name="title" placeholder="عنوان افتراضي لنص او محتوى" value="{{$popup['title']}}" >
                                </div>
                                <div class="col-sm-12 col-md-6 d-flex align-items-center input">
                                    <div class="address ml-4">الحالة</div>
                                    <select name="status" class="form-control activeSelect">
                                        <option value="active" @if($popup['status']=='active') selected="" @endif>مفعل</option>
                                        <option value="non-active"  @if($popup['status']=='non-active') selected="" @endif>غير مفعل</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-center flat-card textareaContainer mb-4">
                            <div class="titleBar d-flex justify-content-end w-100">
                                <p class="language">HTML</p>
                            </div>
                            <textarea class="languageContent w-100 text-left" id="html" name="html">{{$popup['html']}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-center flat-card textareaContainer mb-4">
                            <div class="titleBar d-flex justify-content-end w-100">
                                <p class="language">CSS</p>
                            </div>
                            <textarea class="languageContent w-100 text-left" id="css" name="css">{{$popup['css']}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-center flat-card textareaContainer mb-4">
                            <div class="titleBar d-flex justify-content-end w-100">
                                <p class="language">JS</p>
                            </div>
                            <textarea class="languageContent w-100 text-left" id="js" name="js">{{$popup['js']}}</textarea>
                        </div>
                    </div>
                </div>
            </form>
        @endif
    </section>
@endsection