@extends('const.const')
@section('content')
    <section class="viewText">

    	@include('const.alert-remove')
        <h3 class="content-title d-flex">اللغات 

        </h3>
        <h3 style="float: left;position: relative;top: -50px;">
        	<a href="{{route('languages.create')}}"><span class="btn btn-success">اضافة</span></a>
        </h3>
        <div class="row text-right"  style="background: ">
        	<div class="col-12" style="padding: 2%">

        	 
        	 	<div class="row buttons">
		            <div class="col-12 d-flex justify-content-between">
		                
		            </div>
		        </div>
{{-- 
		        <div class="row titles">
		            <div class="col-12 d-flex justify-content-between flat-card head-titles">
		                <div class="d-flex title">
		                    <div class="checkBoxSpace"></div>
		                    <div class="number">#</div>
		                    <div class="headTitle d-flex">العنوان</div>
		                </div>

		                <div class="date">تاريخ النشر</div>
		            </div>
		        </div> --}}

		        
		        <div class="row content">
		        	<div class="col-12">
		        		<table class="table table-bordered   table-hover" style="background: #fff">
		        			<thead class="thead-dark">
		        				<tr>
		        					<td>كود</td>
		        					<td>اسم اللغة</td>
		        					<td>الاختصار</td>
		        					<td>الاتجاة</td>
		        					<td>عملية</td>
		        				</tr>
		        			</thead>
		        			<tbody>
		        				@foreach($languages as $language)
		        				<tr>
		        					<td>{{-- <input type="radio" class="checkbox" name="id[]" class="idOfRow" value=""> --}} {{$language->id}}</td>
		        					<td>{{$language->lang_name}}</td>
		        					<td>{{$language->shortcut_name}}</td>
		        					<td>{{$language->rtl}}</td>
		        					<td>

		        						<a href='{{ route('languages.edit', $language->id) }}'  data-toggle="tooltip" data-placement="bottom" title="تعديل">
	                                        <span class="far fa-edit"></span>
	                                    </a>

			        					<a href="#" onclick="
	                                            $('.alert-layer').fadeIn();
	                                            $('#remove-target').attr('action','{{ route('languages.destroy', $language->id) }}');
	                                          "  data-toggle="tooltip" data-placement="bottom" title="حذف">
	                                        <span class="far fa-trash-alt"></span>
	                                    </a>


	                                     <a href='/admin/texts/create?language_id={{$language->id}}'  data-toggle="tooltip" data-placement="bottom" title="اضافة محتوي">
	                                        <span class="fa fa-plus"></span>
	                                    </a>




                                	</td>
		        				</tr>
		        				@endforeach

		        			</tbody>
		        		</table>
		        	</div>
		            {{-- <div class="col-12 d-flex justify-content-between flat-card head-titles">
		                <div class="d-flex title light">
		                    <div class="checkBoxSpace">
		                        
		                    </div>
		                    <div class="number"></div>
		                    <div class="headTitle d-flex">صفحة رقم 1</div>
		                    <div class="headTitle d-flex">صفحة رقم 2</div>

		                </div>
		                <div class="date val light">2019/5/25</div>
		            </div> --}}
		        </div>
		        


		   

        	</div>
        </div>
      
    </section>
 
@endsection