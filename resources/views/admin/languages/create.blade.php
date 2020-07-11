@extends('const.const')
@section('content')
    <section class="viewText">
        <h3 class="content-title d-flex">انشاء لغة</h3>
        <div class="row text-right"  style="background: ">
        	<form method="POST" action="{{route('languages.store')}}"  class="row col-12">
        		@csrf
        		{{ method_field('POST') }}
	        	<div class="col-12" style="padding: 50px 2% 50px;background: #fff">

	        		 <div class="col-12 col-md-7 row" style="padding: 6px;">
	                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
	                          الاسم
	                      </div>
	                      <div class="col-sm-9">
	                          <input type="text" name="lang_name" class="form-control" value="{{old('lang_name')}}" autofocus="" required="">
	                      </div>
	                 </div>

	                 <div class="col-12 col-md-7 row" style="padding: 6px;">
	                      <div class="col-sm-3 text-left" style="padding: 5px 0px; font-size: 13px;">
	                          اتجاة اللغة
	                      </div>
	                      <div class="col-sm-9">
	                          <input type="radio" name="rtl" class="checkbox"  value="rtl" 
	                          @if(isset($language) &&$language['rtl']=='rtl')checked=""@endif 
	                           required > من اليمين إلي اليسار &emsp;
	                          <input type="radio" name="rtl" class="checkbox"
	                          @if(isset($language) &&$language['rtl']=='ltr')checked=""@endif 
	                            value="ltr">
	                          من اليسار إلي اليمين
	                      </div>
	                 </div>


	                 <div class="col-12 col-md-7 row" style="padding: 6px;">
	                      <div class="col-sm-3 text-left" style="padding: 10px 0px 0px; font-size: 13px;">
	                          الإسم المختصر
	                      </div>
	                      <div class="col-sm-9">
	                          <input type="text" name="shortcut_name" class="form-control" value="{{old('shortcut_name')}}" max="3" required>
	                      </div>
	                 </div>





	                 <div class="col-12 text-left">
		        		<button class="btn btn-success" style="padding: 10px 50px ;border-radius: 0px;">حفظ</button>
		        	</div>

	        	</div>
	        	

        	</form>
        </div>
      
    </section>
 
@endsection