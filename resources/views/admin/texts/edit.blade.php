@extends('const.const')
@section('content')



    <section class="viewText">
        <h3 class="content-title d-flex">تعديل نصوص</h3>
        <div class="row text-right"  style="background: ">
        	<form method="POST" action="{{route('texts.update',$text->id)}}"  class="row col-12">
        		@csrf
        		{{ method_field('PATCH') }}
	        	<div class="col-12 cust-view" style="padding: 50px 2% 50px;background: #fff">
 
              <input type="hidden" name="language_id"  value="{{$text['language_id']}}">


              			<div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-4 text-left" style="padding: 10px 0px; font-size: 16px;">
		                          تعديل نصوص اللغة  {{$text->language->lang_name}}
		                      </div>
		                    
		                 </div>

	        		 
						 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          الوضع
		                      </div>
		                      <div class="col-sm-9">
		                        <textarea name="theme_title" class="form-control"  required>{{$text['theme_title']}}</textarea>
		                      </div>
		                 </div>


						 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          الاعلان
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="annonce_title" class="form-control"  required="">{{$text['annonce_title']}}</textarea>
		                      </div>
		                 </div>


		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          اسعار الذهب
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="goldprice_title" class="form-control"  required="">{{$text['goldprice_title']}}</textarea>
		                      </div>
		                 </div>
		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          اسعار الفضة
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="silverprice_title" class="form-control"  required="">{{$text['silverprice_title']}}</textarea>
		                      </div>
		                 </div>
		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          عنوان آخر الاخبار
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="latestnews_title" class="form-control"  required="">{{$text['latestnews_title']}}</textarea>
		                      </div>
		                 </div>



		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          الدول المدعومة
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="supportedcountries_title" class="form-control"  required="">{{$text['supportedcountries_title']}}</textarea>
		                      </div>
		                 </div>


		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          رقمي للاعلام 
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="rkmyfooter_title" class="form-control"  required="">{{$text['rkmyfooter_title']}}</textarea>
		                      </div>
		                 </div>



		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          عنوان سياسة الخصوصية
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="privacytittle_title" class="form-control"  required="">{{$text['privacytittle_title']}}</textarea>
		                      </div>
		                 </div>



		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          سياسة الخصوصية
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="privacy_title" class="form-control"  required="">{{$text['privacy_title']}}</textarea>
		                      </div>
		                 </div>



		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          عنوان شروط الاستخدام
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="termstittle_title" class="form-control"  required="">{{$text['termstittle_title']}}</textarea>
		                      </div>
		                 </div>
		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          شروط الاستخدام
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="terms_title" class="form-control"  required="">{{$text['terms_title']}}</textarea>
		                      </div>
		                 </div>
		                 <div class="col-12 col-md-7 row" style="padding: 6px;">
		                      <div class="col-sm-3 text-left" style="padding: 10px 0px; font-size: 13px;">
		                          ملاحظات
		                      </div>
		                      <div class="col-sm-9">
		                           <textarea name="notes" class="form-control"  >{{$text['notes']}}</textarea>
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