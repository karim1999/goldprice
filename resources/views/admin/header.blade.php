@extends('const.const')
@section('content')
    <section class="viewTextsEdit">
        <h3 class="content-title d-flex">الهيدر</h3>
        <form>
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
                                <input type="text" class="form-control addressInput subMenu" name="address" placeholder="عنوان افتراضي لنص او محتوى">
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex align-items-center input">
                                <div class="address ml-4">الحالة</div>
                                <select name="state" class="form-control activeSelect">
                                    <option value="active">مفعل</option>
                                    <option value="non-active">غير مفعل</option>
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
                        <textarea class="languageContent w-100 text-left" id="html" name="html"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center flat-card textareaContainer mb-4">
                        <div class="titleBar d-flex justify-content-end w-100">
                            <p class="language">CSS</p>
                        </div>
                        <textarea class="languageContent w-100 text-left" id="css" name="css"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center flat-card textareaContainer mb-4">
                        <div class="titleBar d-flex justify-content-end w-100">
                            <p class="language">JS</p>
                        </div>
                        <textarea class="languageContent w-100 text-left" id="js" name="js"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection