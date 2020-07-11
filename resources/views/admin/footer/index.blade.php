@extends('const.const')
@section('content')


 
    <section class="footer">
        <form method="POST"action="{{route('footer.update',$footer[0]->id  )}}"   enctype="multipart/form-data" >
                @csrf
                {{ method_field('PATCH') }} 
            <h3 class="content-title d-flex">الفوتر</h3>

            <input type="hidden" name="img_id[]"  value="{{$footer_images[0]->id}}">
            <input type="hidden" name="img_id[]"  value="{{$footer_images[1]->id}}">
            <input type="hidden" name="img_id[]"  value="{{$footer_images[2]->id}}">
            <input type="hidden" name="img_id[]"  value="{{$footer_images[3]->id}}">
            <input type="hidden" name="img_id[]"  value="{{$footer_images[4]->id}}">
            <input type="hidden" name="img_id[]"  value="{{$footer_images[5]->id}}">



            <input type="file" name="path[]" id="real1" class="d-none image">
            <input type="file" name="path[]" id="real2" class="d-none image">
            <input type="file" name="path[]" id="real3" class="d-none image">
            <input type="file" name="path[]" id="real4" class="d-none image">
            <input type="file" name="path[]" id="real5" class="d-none image">
            <input type="file" name="path[]" id="real6" class="d-none image">
            <div class="flat-card mb-5">
                    <div class="innerTitle">
                        <h4 class="inner-title d-flex">الشعارات</h4>
                    </div>
                    <div class="logos mb-4">
                        <div class="row">
                            <div class="col-12 row" style="padding: 20px 0px;">

                                @for($i=1;$i<=6;$i++)
                                <div class="row  mb-3   col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <div class="col-sm-12 uploaderContainer d-flex align-items-center mb-2 row" >
                                        <div style="border:1px solid #eee;padding: 10px;" class="col-12 row">
                                            
                                        <div   class=" col-3 " style="margin-top: 45px;">
                                                
                                            <button id="{{$i}}" class="addImageBtn d-flex justify-content-center align-items-center">
                                                <img src="{{$footer_images[$i-1]->path}}" alt="">
                                            </button>
                                         </div>

                                        <div class="col-9"> 
                                            <input type="" name="title_ar[]" class="form-control" style="margin-bottom: 10px;" placeholder="اسم الموقع باللغة العربية" value="{{$footer_images[$i-1]->title_ar}}">
                                            <input type="" name="title_en[]" class="form-control" style="margin-bottom: 10px;"  placeholder="اسم الموقع باللغة الانجليزية" value="{{$footer_images[$i-1]->title_en}}">
                                            <input type="" name="link[]" class="form-control"  style="margin-top: 10px;"  placeholder="رابط الموقع"
                                            value="{{$footer_images[$i-1]->link}}"
                                            >
                                        </div>
                                        
                                       {{--  <div class="addImageLink add">رفع صورة</div> --}}
                                        </div>
                                    </div>
                                </div>
                                @endfor


                               {{--  <div class="row mb-3">
                                    <div class="col-md-6 col-sm-12 uploaderContainer d-flex align-items-center mb-2">
                                        <button id="3" class="addImageBtn d-flex justify-content-center align-items-center">
                                            <img src="/images/addPic%20icon.svg" alt="">
                                        </button>
                                        <div class="addImageLink add">رفع صورة</div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 uploaderContainer d-flex align-items-center mb-2">
                                        <button id="4" class="addImageBtn d-flex justify-content-center align-items-center">
                                            <img src="/images/addPic%20icon.svg" alt="">
                                        </button>
                                        <div class="addImageLink add">رفع صورة</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 col-sm-12 uploaderContainer d-flex align-items-center mb-2">
                                        <button id="5" class="addImageBtn d-flex justify-content-center align-items-center">
                                            <img src="/images/addPic%20icon.svg" alt="">
                                        </button>
                                        <div class="addImageLink add">رفع صورة</div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 uploaderContainer d-flex align-items-center mb-2">
                                        <button id="6" class="addImageBtn d-flex justify-content-center align-items-center">
                                            <img src="/images/addPic%20icon.svg" alt="">
                                        </button>
                                        <div class="addImageLink add">رفع صورة</div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="innerTitle">
                        <h4 class="inner-title d-flex">النص</h4>
                    </div>
                    <div class="textInput mb-4">
                        <textarea name="text" class="textArea languageContent text-right" autocomplete="off">{{$footer[0]->text}}</textarea>
                    </div>
                    <div class="socialLinks">
                        <div class="row mb-4">
                            <div class="col-md-6 col-sm-12">
                                <h4 class="inner-title d-flex">فيس بوك</h4>
                                <input type="text" name="facebook" class="form-control" autocomplete="off" value="{{$footer[0]->facebook}}">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h4 class="inner-title d-flex right-address">تويتر</h4>
                                <input type="text" name="twitter" class="form-control" autocomplete="off" value="{{$footer[0]->twitter}}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 col-sm-12">
                                <h4 class="inner-title d-flex">إنستغرام</h4>
                                <input type="text" name="instagram" class="form-control" autocomplete="off" value="{{$footer[0]->instagram}}">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h4 class="inner-title d-flex right-address">لينكدن</h4>
                                <input type="text" name="linkedin" class="form-control" autocomplete="off" value="{{$footer[0]->linkedin}}">
                            </div>
                        </div>
                    </div>
                    <div class="innerTitle">
                        <h4 class="inner-title d-flex">النص</h4>
                    </div>
                    <div class="textInput mb-4">
                        <textarea name="bio" class="textArea languageContent text-right" autocomplete="off">{{$footer[0]->bio}}</textarea>
                    </div>
                    <div class="innerTitle">
                        <h4 class="inner-title d-flex">الكود</h4>
                    </div>
                    <div class="textInput mb-4" dir="ltr">
                        <textarea name="code" class="textArea" id="textArea" autocomplete="off" dir="ltr">{{$footer[0]->code}}</textarea>
                    </div>
            </div>
            <div class="row mb-5 submitBtns">
                <div class="col-12 d-flex">
                    <button class="btn btn-danger cancel">إلغاء</button>
                    <button type="submit" class="btn btn-success confirm mr-3">موافق</button>
                </div>
            </div>
        </form>
    </section>
 @endsection