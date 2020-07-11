@extends('const.const')
@section('content')

    <section class="viewTextsEdit">
        <h3 class="content-title d-flex">عرض النصوص</h3>
        <form>
            <div class="row buttons">
                <div class="col-12 d-flex justify-content-between btnsContainer">
                    <button type="button" class="btn btn-light edit-btn apply-btn" data-toggle="modal" data-target="#addLanguage">
                        <img src="/images/add%20icon.svg" alt="add language icon">إضافة لغة
                    </button>

                    <div class="DeleteAdd d-flex">
                        <button class="btn btn-danger cancel">إلغاء</button>
                        <button class="btn btn-success update" type="submit">تعديل</button>
                    </div>
                </div>
            </div>
            <div class="languages col-12">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center flat-card mb-3">
                        <div class="address ml-4">العنوان</div>
                        <input type="text" class="form-control addressInput" name="address" placeholder="عنوان افتراضي لنص او محتوى">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center flat-card textareaContainer mb-4">
                        <div class="titleBar d-flex justify-content-between w-100">
                            <p class="language">العربيه</p>
                            <button class="langDelete"><img src="/images/delete%20icon.svg" alt="delete language icon"></button>
                        </div>
                        <textarea class="languageContent w-100 text-right" name="arabic" id="arabic"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center flat-card textareaContainer mb-4">
                        <div class="titleBar d-flex justify-content-between w-100">
                            <p class="language">English</p>
                            <button class="langDelete"><img src="/images/delete%20icon.svg" alt="delete language icon"></button>
                        </div>
                        <textarea class="languageContent w-100" name="english" id="english" dir="ltr"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="addLanguage" tabindex="-1" role="dialog" aria-labelledby="addLanguage" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <h5 class="modal-title" id="exampleModalLongTitle">إضافة لغه جديدة</h5>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-start">
                        <label for="selectLanguage">اللغة</label>
                        <select class="form-control" id="selectLanguage">
                            <option value="arabic">العربية</option>
                            <option value="english">English</option>
                            <option value="france">Le français</option>
                        </select>
                    </div>
                    <div class="modal-footer" dir="ltr">
                        <button type="button" class="btn btn-success addLang">إضافة</button>
                        <button type="button" class="btn btn-danger cancelLang" data-dismiss="modal">إلغاء</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection