@extends('const.const')
@section('content')

    <section class="home">
        <h3 class="content-title d-flex">الصفحة الرئيسية</h3>
        <div class="row mb-3">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 homeCart">
                <div class="col-lg-12 flat-card">
                    <h5 class="flat-card-title d-flex">عدد الزوار اليوم</h5>
                    <h3 class="d-flex">85,524</h3>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 homeCart">
                <div class="col-12 flat-card">
                    <h5 class="flat-card-title d-flex">عدد الزوار الكلي</h5>
                    <h3 class="d-flex">1,5 مليون</h3>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 homeCart">
                <div class="col-12 flat-card">
                    <h5 class="flat-card-title d-flex">مجموع الأرباح الكلي اليوم</h5>
                    {{-- <h3 class="d-flex">$1,521</h3> --}}
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 homeCart">
                <div class="col-12 flat-card">
                    <h5 class="flat-card-title d-flex">مجموع الأرباح خلال الشهر</h5>
                     {{--<h3 class="d-flex">$25,157</h3>--}}
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 homeCart">
                <div class="flat-card">
                    <h5 class="flat-card-title d-flex">أليكسا</h5>
                    <div class="card-content d-flex flex-column">
                        {{-- <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="title d-flex align-items-center">
                                <div class="indicator dark-blue"></div>
                                <p>ترتيب أليكسا</p>
                            </div>
                            <div class="value">
                                <p>15,225</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="title d-flex align-items-center">
                                <div class="indicator light-blue"></div>
                                <p>عدد الزيارات</p>
                            </div>
                            <div class="value">
                                <p>75,517</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 homeCart">
                <div class="flat-card">
                    <h5 class="flat-card-title d-flex">تأثير الموقع</h5>
                    <div class="card-content d-flex flex-column">
                        {{-- <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="title d-flex align-items-center">
                                <div class="indicator dark-blue"></div>
                                <p>PA</p>
                            </div>
                            <div class="value">
                                <p>56</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="title d-flex align-items-center">
                                <div class="indicator light-blue"></div>
                                <p>DA</p>
                            </div>
                            <div class="value">
                                <p>75</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection