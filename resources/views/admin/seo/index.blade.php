@extends('const.const')
@section('content')

    <section class="seo">
        <form method="POST" action="{{route('seo.update',$seo->id)}}"  enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}

            <input type="file" name="logo" id="real1" class="d-none image">
            <input type="file" name="icon" id="real2" class="d-none image">
            <h3 class="content-title d-flex">إعدادات السيو</h3>
            <div class="flat-card mb-5">
                    <div class="logos mb-4">
                        <div class="row">
                            <div class="col-lg-7 col-sm-12">

                                <div class="row  mb-3">

                                    <div class="col-md-6 col-sm-12 uploaderContainer d-flex flex-column">
                                        <div class="innerTitle">
                                            <h4 class="inner-title d-flex">شعار الموقع</h4>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button id="1" class="addImageBtn d-flex justify-content-center align-items-center">
                                                <img src="{{$seo->logo}}">
                                            </button>
                                            <div class="addImageLink add">{{-- deleteImg --}}تغيير الشعار</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 uploaderContainer flex-column d-flex">
                                        <div class="innerTitle">
                                            <h4 class="inner-title d-flex">أيقونة المتصفح</h4>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button id="2" class="addImageBtn d-flex justify-content-center align-items-center">
                                                <img src="{{
                                                $seo->icon}}" alt="">
                                            </button>
                                            <div class="addImageLink add">تغيير الشعار</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="socialLinks">
                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <h4 class="inner-title d-flex">إسم الموقع</h4>
                                <input type="text" name="tittle" class="form-control" autocomplete="off" value="{{$seo->tittle}}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <h4 class="inner-title d-flex">كلمات مفتاحية</h4>
                                <input type="text" name="subtittle" class="form-control" autocomplete="off" value="{{$seo->subtittle}}">
                            </div>
                        </div>
                    </div>
                    <div class="innerTitle">
                        <h4 class="inner-title d-flex">الميتا دسكربشن</h4>
                    </div>
                    <div class="textInput mb-4">
                        <textarea name="description" class="textArea languageContent text-right" autocomplete="off">{{$seo->description}}</textarea>
                    </div>
            </div>
            <div class="row mb-5 submitBtns">
                <div class="col-12 d-flex">
                    <a class="btn btn-danger cancel" href="/admin/seo" style="color: #fff;padding: 10px 50px">إلغاء</a>
                    <button type="submit" class="btn btn-success confirm mr-3">موافق</button>
                </div>
            </div>
        </form>
    </section>
@endsection