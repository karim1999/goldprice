@extends('const.const')
@section('content')
    <section class="codes">
        <form method="POST" action="{{route('codes.update',$seo->id)}} ">
            @csrf
            {{ method_field('PATCH') }}
            <h3 class="content-title d-flex">الأكواد</h3>
            <div class="flat-card mb-5">
                <div class="socialLinks">
                    <div class="row inputFields mb-4">
                        <input type="hidden" name="id" value="{{$seo->id}}">
                        <div class="col-md-6 col-sm-12 mb-4">
                            <h4 class="inner-title d-flex">كود تحليلات  جوجل</h4>
                            <input type="" name="view_id" value="{{$seo->view_id}}" class="form-control" style="background: #fff;margin-bottom: 10px;" placeholder="رقم VIEW ID">
                            <textarea  name="analysis_google_code" class="form-control " style="min-height: 400px;text-align: left;direction: ltr;">{{$seo->analysis_google_code}}</textarea>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-4">
                            <h4 class="inner-title d-flex">كود مصادقة جوجل</h4>
                           
                            

                            <textarea  name="verification_google_code" class="form-control"  style="min-height: 400px;text-align: left;direction: ltr;" placeholder="الكود">{{$seo->verification_google_code}}</textarea>
                        </div>
                    </div>
                   {{--  <div class="row mb-4">
                        <button class="btn btn-primary addCode" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCode">اضافه</button>
                    </div> --}}
                </div>
            </div>
            <div class="row mb-5 submitBtns">
                <div class="col-12 d-flex">
                    <a class="btn btn-danger cancel" href="/admin/codes" style="color: #fff;padding: 10px 50px">إلغاء</a>
                    <button type="submit" class="btn btn-success confirm mr-3">موافق</button>
                </div>
            </div>
        </form>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="addCode" tabindex="-1" role="dialog" aria-labelledby="addCode" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">إضافة كود</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group d-flex flex-column align-items-start">
                        <label for="code-name" class="col-form-label" dir="rtl">الأسم</label>
                        <input type="text" class="form-control" id="code-name">
                    </div>
                    <div class="form-group d-flex flex-column align-items-start">
                        <label for="code" class="col-form-label">الكود</label>
                        <input type="text" class="form-control" id="code"></input>
                    </div>
                </div>
                <div class="modal-footer" dir="ltr">
                    <button type="button" class="btn btn-success addLang">إضافة</button>
                    <button type="button" class="btn btn-danger cancelLang" data-dismiss="modal">إلغاء</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection