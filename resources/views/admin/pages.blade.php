@extends('const.const')
@section('content')
    <section class="viewText">
        <h3 class="content-title d-flex">الصفحات</h3>
        <div class="row text-right"  style="background: ">
        	<div class="col-12" style="padding: 2%">

        		<form method="GET" action="">
        	 	<div class="row buttons">
		            <div class="col-12 d-flex justify-content-between">
		                <a href="contentPagesEdit"><button class="btn btn-success edit-btn">تعديل</button></a>
		            </div>
		        </div>

		        <div class="row titles">
		            <div class="col-12 d-flex justify-content-between flat-card head-titles">
		                <div class="d-flex title">
		                    <div class="checkBoxSpace"></div>
		                    <div class="number">#</div>
		                    <div class="headTitle d-flex">العنوان</div>
		                </div>

		                <div class="date">تاريخ النشر</div>
		            </div>
		        </div>

		        <div class="row content">
		            <div class="col-12 d-flex justify-content-between flat-card head-titles">
		                <div class="d-flex title light">
		                    <div class="checkBoxSpace">
		                        <input type="radio" class="checkbox" name="page_id" value="7">
		                    </div>
		                    <div class="number">02</div>
		                    <div class="headTitle d-flex">صفحة رقم 1</div>
		                </div>
		                <div class="date val light">2019/5/25</div>
		            </div>
		        </div>
		        </form>

        	</div>
        </div>
      
    </section>
 
@endsection