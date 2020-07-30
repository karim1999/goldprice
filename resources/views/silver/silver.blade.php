<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $version= '?v='.time(); ?>
    <link rel="icon" type="image/png" href="@if(session('language')=="ar") {{$api['site_profile']->icon_ar}} @else {{$api['site_profile']->icon_en}} @endif " />
    <meta name=" description" content="
    @if(session('language')=="ar") {{$api['site_profile']->site_description_ar}} @else {{$api['site_profile']->site_description_en}} @endif ">

    <title>
      @if(session('language')=="ar") {{$api['site_profile']->site_name_ar}} | {{$api['site_profile']->site_sub_name_ar}} @else {{$api['site_profile']->site_name_en}} | {{$api['site_profile']->site_sub_name_en}} @endif </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="
    @if(session('language')=="ar") {{$api['site_profile']->ar_keywords}} @else {{$api['site_profile']->en_keywords}} @endif
    ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {!!$api['site_profile']->google_analytics!!}
    @include('silver.style')
    <link href="https://fonts.googleapis.com/css?family=Cairo|Harmattan|Tajawal" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{env('PUBLIC_PATH')}}/css/switcher.css">
    <link rel="stylesheet" type="text/css" href="{{env('PUBLIC_PATH')}}/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{env('PUBLIC_PATH')}}/css/main.css{{$version}}">
</head>

<body>
{{--     <style type="text/css">
        @media(max-width:990px)
        {
            .container{
                padding: 0px;
                max-width: 100%
              }
        }
        body{
            overflow-x: hidden!important;
        }

    </style>
  --}}

    <div class="col-12 px-0">
        <div class="col-12 px-0">
            @if(session('language')=="ar" && session('popup_status')!="false" && $api['advs']->popup_status==1)
            {!!$api['advs']->popup_ar!!}
            @else
            {!!$api['advs']->popup_en!!}
            @endif
        </div>
        <div class="col-12 px-0" style="background-color: #EB593C; color: white; text-align: center; padding: 5px">
            @if($api['advs']->header_status==1 &&  session('header_status')!="false")
                @if(session('language')=="ar")
                    {!!$api['advs']->header_ar!!}
                @else
                    {!!$api['advs']->header_en!!}
                @endif
            @endif
        </div>
    </div>


    <div class="col-12 px-0" style="">
        <div class="container" style="padding: 10px 5px 5px">
            <div class="col-12 row px-0">
                <div class="col-6
                @if( session('language') !==null && session('language')!='ar' )
                text-left
                @else
                text-right
                @endif
                " style="padding: 0px 7px;">
                    <div class="dropdown border-0" style="display: inline-block;z-index:1;position:relative">
                        <button class="btn  border-0  " type="button"   style="background: transparent;z-index:1">
                            @if(session('language')!="ar")
                                @if(env('DEFAULT_SITE')=='silver')
                                    <a href="{{env('SILVER_AR')}}" class="d-block">
                                        <span style="padding: 0px 5px;color: var(--second-font-color)">
                                            العربية
                                        </span>
                                    </a>
                                @else
                                    <a href="{{env('GOLD_AR')}}" class="d-block">
                                        <span style="padding: 0px 5px;color: var(--second-font-color)">
                                            العربية
                                        </span>
                                    </a>
                                @endif
                            @else
                            @if(env('DEFAULT_SITE')=='gold')
                                    <a href="{{env('GOLD_EN')}}" class="d-block">
                                        <span style="padding: 0px 5px;color: var(--second-font-color)">
                                            English
                                        </span>
                                    </a>
                                @else
                                    <a href="{{env('SILVER_EN')}}" class="d-block">
                                        <span style="padding: 0px 5px;color: var(--second-font-color)">
                                            English
                                        </span>
                                    </a>
                                @endif
                            @endif
                            <span class="caret" style="color: var(--second-font-color)"></span>
                        </button>
                                          </div>
                    <div class="dropdown" style="display: inline-block;z-index:1;position:relative">
                        <select class="form-control" style="background: transparent;border:none;box-shadow: none;color: var(--second-font-color);" id="select-currency">
                            @foreach($currencies as $mycurr)
                            <option value="{{$mycurr['value']}}" style="color: #919191" @if($mycurr['value']==session('currency')) selected="" @endif>
                                @if(session('language')=='ar' )
                                {{$mycurr['ar_name']}}
                                @else
                                    {{$mycurr['value']}}
                                @endif
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div style="display: inline-block; ;color:var(--second-font-color);padding: 7px;" class="col-6
                @if( session('language') !==null && session('language')!='ar' )
                 text-right
                @endif



                 ">
                    @lang('index.dark_mode')
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="opacity: 0" @if(session('mode')=='night' ) checked=""  @endif>
                </div>
            </div>


            <div class="col-12 text-center" style="padding: 5px;position: relative;z-index: 1 ">

                <a href="{{env('APP_URL')}}">
                    @if(session('language')=='ar' && session('mode')=='day')
                    <img src="{{$api['site_profile']->logo_ar_path}}" style="width: 90px;height: 90px;display: inline-block;" id="site-logo">
                    @elseif(session('language')=='ar' && session('mode')=='night')
                    <img src="{{$api['site_profile']->logo_ar_path_dark}}" style="width: 90px;height: 90px;display: inline-block;" id="site-logo">
                    @elseif(session('language')!='ar' && session('mode')=='day')
                    <img src="{{$api['site_profile']->logo_en_path}}" style="width: 90px;height: 90px;display: inline-block;" id="site-logo">
                    @elseif(session('language')!='ar' && session('mode')=='night')
                    <img src="{{$api['site_profile']->logo_en_path_dark}}" style="width: 90px;height: 90px;display: inline-block;" id="site-logo">
                    @endif
                </a>

                {{-- <img src="{{$seo['logo']}}" style="width: 90px;height: 90px;display: inline-block;"> --}}
            </div>
        </div>
    </div>




    @if(session('adv_status')!="false" && $api['advs']->adv_status==1)
    <div class="col-12 px-0">
        <div class="container" style="padding: 20px 8%">
            <div class="col-12 px-0" style="padding: 10px;background: var(--main-color);border:1px solid #e4e4e5;border-radius: 5px;margin: 0px auto;" id="adv">
                <div class="col-12 row" style="padding: 0px 5px;">
                    <div class="col-10" style="height: 38px;padding: 5px 10px">
                        <h6 style="color: var(--main-font-color) ;font-size: 15px;" class="@if( session('language') !==null && session('language')!='ar' )
                     text-left
                    @else
                    text-right
                    @endif ">
                            @lang('index.important_annonce_title')
                        </h6>
                    </div>
                    <div class="col-2
                     @if( session('language') !==null && session('language')!='ar' )
                     text-right
                    @endif

                    " style="height: 38px;padding: 0px 10px;position: relative;z-index: 1">
                        <span class="fa fa-times" style="color: var(--color);background: var(--second-bg-color);padding: 5px 7px;border-radius: 50%;font-size: 10px;margin-top: 6px;cursor: pointer;z-index: 1;position: relative;display: inline-block;" onclick="$('#adv').slideUp();"></span>
                    </div>
                    <p style="color: var(--second-font-color);text-align: justify;padding: 5px 5px;position: relative;z-index: 1">
                      @if(session('language')=="ar")
                      {!!$api['advs']->adv_ar!!}
                      @else
                      {!!$api['advs']->adv_en!!}
                      @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif



    <div class="col-12 px-0" style="padding: 20px 0px ">
        <div class="container text-center">
            <a href="
            @if(session('language')=="ar")
            {{env('GOLD_AR')}}
            @else
            {{env('GOLD_EN')}}
            @endif
            ">
                <span style="display: inline-block;background: var(--main-bg-color);height: 40px;width: 120px;border-radius: 35px;padding: 10px 0px ;color: var(--main-font-color);margin: 0px 7px ;border:1px solid #ddd" class="text-center d-inline-block">@lang('index.gold_price')</span>
            </a>
            <a href="
            @if(session('language')=="ar")
            {{env('SILVER_AR')}}
            @else
            {{env('SILVER_EN')}}
            @endif
            ">
                <span style="display: inline-block;background: var(--golden-color);height: 40px;width: 120px;border-radius: 35px;padding: 10px 0px ;color: var(--main-color);margin: 0px 7px " class="text-center d-inline-block">@lang('index.silver_price')</span>
            </a>
        </div>
    </div>


    <div class="col-12 px-0" style="padding: 50px 0px  30px;">
        <div class="container text-center py-3 py-md-0  px-3"  >
            <div class="col-12" style="background: var(--main-color);border-radius: 12px;">
            <div style="background: var(--main-color);padding: 0px;border-radius: 8px;" class="row">

                @foreach($days as $day)
                <div class="col-12 col-md   my-md-0" style="z-index: 2">
                    <div style=" " class="select-day " data-day="{{$day[0]}}">
                        {{$day[1]}}
                        <p>{{$day[0]}}</p>
                    </div>
                </div>
                @endforeach

                </div>

            </div>
         </div>
    </div>
    <div class="col-12 px-0">
        <div class="container result-class response-ajax val">
            <div class="ajax-result-6 val row">
                <div class="col-12 col-md-6 col-lg-2" style="margin-top: 20px; cursor: pointer"
                     onclick="get_chart_api('e999')">
                    <div style="" class="text-center">
                        <span>
                            @if(session('site_type')=='gold'&&session('language')=='ar')
                            عيار 24
                            @elseif(session('site_type')=='silver'&&session('language')=='ar')
                            عيار 99.9
                            @elseif(session('site_type')=='gold'&&session('language')!='ar')
                            Caliber 24
                            @elseif(session('site_type')=='silver'&&session('language')!='ar')
                            Caliber 99.9
                            @endif
                        </span>
                        <h3 class="harma" id="res1">{{ sprintf('%0.2f', $e999) }}</h3>
                        <span class="current_currency"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2" style="margin-top: 20px; cursor: pointer"
                     onclick="get_chart_api('e958')">
                    <div class="text-center">
                        <span>
                            @if(session('site_type')=='gold'&&session('language')=='ar')
                            عيار 22
                            @elseif(session('site_type')=='silver'&&session('language')=='ar')
                            عيار 95.8
                            @elseif(session('site_type')=='gold'&&session('language')!='ar')
                            Caliber 22
                            @elseif(session('site_type')=='silver'&&session('language')!='ar')
                            Caliber 95.8
                            @endif
                        </span>
                        <h3 class="harma" id="res2">{{ sprintf('%0.2f', $e958) }}</h3>
                        <span class="current_currency"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2" style="margin-top: 20px; cursor: pointer"
                     onclick="get_chart_api('e925')">
                    <div class="text-center">
                        <span>
                            @if(session('site_type')=='gold'&&session('language')=='ar')
                            عيار 21
                            @elseif(session('site_type')=='silver'&&session('language')=='ar')
                            عيار 92.5
                            @elseif(session('site_type')=='gold'&&session('language')!='ar')
                            Caliber 21
                            @elseif(session('site_type')=='silver'&&session('language')!='ar')
                            Caliber 92.5
                            @endif
                        </span>
                        <h3 class="harma" id="res3">{{ sprintf('%0.2f', $e925) }}</h3>
                        <span class="current_currency"></span>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2" style="margin-top: 20px; cursor: pointer"
                     onclick="get_chart_api('e90')">
                    <div class="text-center">
                        <span>
                            @if(session('site_type')=='gold'&&session('language')=='ar')
                            عيار 18
                            @elseif(session('site_type')=='silver'&&session('language')=='ar')
                            عيار 90
                            @elseif(session('site_type')=='gold'&&session('language')!='ar')
                            Caliber 18
                            @elseif(session('site_type')=='silver'&&session('language')!='ar')
                            Caliber 90
                            @endif
                        </span>
                        <h3 class="harma" id="res4">{{ sprintf('%0.2f', $e90) }}</h3>
                        <span class="current_currency"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2" style="margin-top: 20px; cursor: pointer"
                     onclick="get_chart_api('e80')">
                    <div class="text-center">
                        <span>
                            @if(session('site_type')=='gold'&&session('language')=='ar')
                            عيار 14
                            @elseif(session('site_type')=='silver'&&session('language')=='ar')
                            عيار 82
                            @elseif(session('site_type')=='gold'&&session('language')!='ar')
                            Caliber 14
                            @elseif(session('site_type')=='silver'&&session('language')!='ar')
                            Caliber 82
                            @endif
                        </span>
                        <h3 class="harma" id="res5">{{ sprintf('%0.2f', $e80) }}</h3>
                        <span class="current_currency"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2" style="margin-top: 20px; cursor: pointer"
                     onclick="get_chart_api('auk')">
                    <div class="text-center">
                        <span>
                            @if(session('site_type')=='gold'&&session('language')=='ar')
                            اوقية
                            @elseif(session('site_type')=='silver'&&session('language')=='ar')
                            اوقية
                            @elseif(session('site_type')=='gold'&&session('language')!='ar')
                            Ounce
                            @elseif(session('site_type')=='silver'&&session('language')!='ar')
                            Ounce
                            @endif
                        </span>
                        <h3 class="harma" id="res6">{{ sprintf('%0.2f', $auk) }} </h3>
                        <span class="current_currency"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 px-0" style="padding:50px 0px ">
        <div class="container ">
            <div class="col-12 row">
                <div class="col-12 col-md-4 site-news px-0 px-md-2" style="overflow-x: hidden;">
                    <div style="overflow-x: hidden;">
                        <h4 class="text-center pb-3 pt-2" style="font-size: 18px;">@lang('index.news_title')</h4>
                        <div style="overflow-x: hidden;" id="news">
                            @foreach($news as $mynews)
                            <div style="">
                                <a href="{{$mynews->link}}" target="_blank">
                                    <h5 style="font-size: 16px;text-align: right;" class="@if( session('language') !==null && session('language')!='ar' )
                     text-left
                    @endif
                    ">{{$mynews->tittle}}</h5>
                                </a>
                                <span>{{$mynews->source}}</span>
                            </div>
                            <div>
                                <hr>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 stat-price px-md-2 px-0" style="margin-top: 25px;">
                    <div class="response-ajax col-12 mychart col-12 " style="width: 100%!important;max-width: 100%!important">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--     <div class="col-12 px-0" style="position: relative;z-index: -1;margin-top: 50px;">
        <div class="container   px-0">
            <hr>
        </div>
    </div> --}}

    <div class="col-12 mb-3" style="padding-top: 40px;position: relative;z-index: 1;">
        <div class="container" style="padding: 10px 0px ">
            <div class="col-12 row">
                <div class="col-12 col-md-4 text-center
                @if(session('language')=='ar')
                 text-md-right
                 @else
                 text-md-left
                 @endif
                   py-3" style="padding-top: 5px;">
                    <a href="#"   style="color: var(--second-font-color);margin: 0px 8px;cursor: pointer;font-weight: normal;">
                        @lang('index.footer_privacy_title')
                    </a>
                    <a href="#" style="color: var(--second-font-color);margin: 0px 8px;font-weight: normal;"  >
                        @lang('index.footer_terms_title')
                    </a>
                </div>
                <div class="col-12 col-md-4 text-center py-3 " style="padding-top: 5px;">
                    <a href="" target="_blank"><span class="fab fa-facebook hover-footer" style="color: var(--second-bg-color);margin: 0px 7px;font-size: 18px;"></span>
                    </a>
                    <a href="" target="_blank"><span class="fab fa-twitter hover-footer" style="color: var(--second-bg-color);margin: 0px 7px;font-size: 18px;"></span>

                    </a>
                    <a href="" target="_blank"><span class="fab fa-instagram hover-footer" style="color: var(--second-bg-color);margin: 0px 7px;font-size: 18px;"></span>
                    </a>
                </div>
                <div class="col-12 col-md-4 text-center
                @if(session('language')=='ar')
                 text-md-left
                 @else
                 text-md-right
                 @endif
                  py-3" style="padding-top: 10px;">
                    @lang('index.footer_copy_rights')
                </div>
            </div>
        </div>
    </div>



    <link rel="stylesheet" type="text/css" href="https://footer.devlab.ae/public/styles.css">
    @if(session('language')!='en')
    <iframe src="https://footer.devlab.ae/ar?mode={{session('mode')}}&night_bg=171734&day_bg=f5f7fb" class="col-12 footer-iframe px-0" style="width: 100%" id="devlab-footer"></iframe>
    @else
    <iframe src="https://footer.devlab.ae/en?mode={{session('mode')}}&night_bg=171734&day_bg=f5f7fb" class="col-12 footer-iframe px-0" style="width: 100%"  id="devlab-footer" ></iframe>
    @endif



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{env('PUBLIC_PATH')}}/js/jquery.switcher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>


    <script>
    $(function() {
        $.switcher();
    });
    $('.select-day').click(function() {
        $('.select-day').removeClass('active');
        $(this).addClass('active');
        //alert($(this).data('day'));

        $('.ajax-result-6.val').css('opacity', '0.05');
        $('.response-ajax.val').prepend('<div class="text-center loading-image-pricing" style="position:absolute;width:100%;z-index:1"><i class="fas fa-circle-notch fa-spin" style="display:inline-block;font-size:80px;color:#4099ff;margin-top:40px;z-index:1"></i><div>');

        $.ajax({
            method: "get",
            url: "/update_data_date",
            data: { day: $(this).data('day') }
        }).done(function(msg) {
            $('#res6').text(msg['auk'].toFixed(2));
            $('#res5').text(msg['e80'].toFixed(2));
            $('#res4').text(msg['e90'].toFixed(2));
            $('#res3').text(msg['e925'].toFixed(2));
            $('#res2').text(msg['e958'].toFixed(2));
            $('#res1').text(msg['e999'].toFixed(2));


            $('.ajax-result-6').css('opacity', '1');
            $('.loading-image-pricing').remove();


            //console.log(msg);
        });


    });

    $('#inlineCheckbox1').change(function() {

        if ($(this).is(':checked')) {


            $('#devlab-footer').attr('src','https://footer.devlab.ae/{{session('language')}}?mode=night&night_bg=171734&day_bg=f5f7fb');


            @if(session('site_type') == 'silver')
                $('#site-logo').attr('src', '{{$api['site_profile']->logo_en_path_dark}}');
                $('html').get(0).style.setProperty('--main-color', '#242448');
                $('html').get(0).style.setProperty('--main-bg-color', '#171734');
                $('html').get(0).style.setProperty('--main-color', '#242448');
                $('html').get(0).style.setProperty('--second-bg-color', '#b3b3b3');
                $('html').get(0).style.setProperty('--golden-color', '#2289ff');
                $('html').get(0).style.setProperty('--right-graident-color', '#0d7dff');
                $('html').get(0).style.setProperty('--left-graident-color', '#33ccff');
                $('html').get(0).style.setProperty('--main-font-color', '#fff');
                $('html').get(0).style.setProperty('--second-font-color', '#fff');
                $('html').get(0).style.setProperty('--third-font-color', '#cecece');
                $('html').get(0).style.setProperty('--color', '#fff');
                $('html').get(0).style.setProperty('--inverse-color', '#fff');
                $('html').get(0).style.setProperty('--box-shadow-color', 'transparent');
            @elseif(session('site_type') == 'gold')
                $('#site-logo').attr('src', '{{$api['site_profile']->logo_en_path_dark}}');
                $('html').get(0).style.setProperty('--main-color', '#242448');
                $('html').get(0).style.setProperty('--main-bg-color', '#171734');
                $('html').get(0).style.setProperty('--main-color', '#242448');
                $('html').get(0).style.setProperty('--second-bg-color', '#b3b3b3');
                $('html').get(0).style.setProperty('--golden-color', '#fbb901');
                $('html').get(0).style.setProperty('--right-graident-color', '#0d7dff');
                $('html').get(0).style.setProperty('--left-graident-color', '#33ccff');
                $('html').get(0).style.setProperty('--main-font-color', '#fff');
                $('html').get(0).style.setProperty('--second-font-color', '#fff');
                $('html').get(0).style.setProperty('--third-font-color', '#cecece');
                $('html').get(0).style.setProperty('--color', '#fff');
                $('html').get(0).style.setProperty('--inverse-color', '#fff');
                $('html').get(0).style.setProperty('--box-shadow-color', 'transparent');
            @endif
            $.ajax({
                method: "get",
                url: "/update_mode",
                data: { mode: 'night' }
            }).done(function(msg) {});
             } else {

                $('#devlab-footer').attr('src','https://footer.devlab.ae/{{session('language')}}?mode=day&night_bg=171734&day_bg=f5f7fb');



                @if(session('site_type') == 'silver')
                    $('#site-logo').attr('src', '{{$api['site_profile']->logo_en_path}}');
                    $('html').get(0).style.setProperty('--main-color', '#242448');
                    $('html').get(0).style.setProperty('--main-bg-color', '#f5f7fb');
                    $('html').get(0).style.setProperty('--main-color', '#fff');
                    $('html').get(0).style.setProperty('--second-bg-color', '#b3b3b3');
                    $('html').get(0).style.setProperty('--golden-color', '#2289ff');
                    $('html').get(0).style.setProperty('--right-graident-color', '#0d7dff');
                    $('html').get(0).style.setProperty('--left-graident-color', '#33ccff');
                    $('html').get(0).style.setProperty('--main-font-color', '#4d4d4d');
                    $('html').get(0).style.setProperty('--second-font-color', '#8e8e8f');
                    $('html').get(0).style.setProperty('--third-font-color', '#cecece');
                    $('html').get(0).style.setProperty('--color', '#fff');
                    $('html').get(0).style.setProperty('--inverse-color', 'var(--second-font-color)');
                    $('html').get(0).style.setProperty('--box-shadow-color', '#bec5d2');
                @elseif(session('site_type') == 'gold')
                    $('#site-logo').attr('src', '{{$api['site_profile']->logo_en_path}}');
                    $('html').get(0).style.setProperty('--main-bg-color', '#f5f7fb');
                    $('html').get(0).style.setProperty('--main-color', '#fff');
                    $('html').get(0).style.setProperty('--second-bg-color', '#b3b3b3');
                    $('html').get(0).style.setProperty('--golden-color', '#fbb901');
                    $('html').get(0).style.setProperty('--right-graident-color', '#0d7dff');
                    $('html').get(0).style.setProperty('--left-graident-color', '#33ccff');
                    $('html').get(0).style.setProperty('--main-font-color', '#4d4d4d');
                    $('html').get(0).style.setProperty('--second-font-color', '#8e8e8f');
                    $('html').get(0).style.setProperty('--third-font-color', '#cecece');
                    $('html').get(0).style.setProperty('--color', '#fff');
                    $('html').get(0).style.setProperty('--inverse-color', 'var(--second-font-color)');
                    $('html').get(0).style.setProperty('--box-shadow-color', '#bec5d2');
                @endif
            $.ajax({
                method: "get",
                url: "/update_mode",
                data: { mode: 'day' }
            }).done(function(msg) {});
        }
    });
    $('.select-day').last().addClass('active');
    $('#select-currency').on('change', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "get",
            url: "/update_currency",
            data: { currency: $(this).val() }
        }).done(function(msg) {
            update_currency_text();
            update_data_ajax();
        });
    });
    $('.select-country').click(function() {
        $.ajax({
            method: "get",
            url: "/update_country",
            data: { country: $(this).data('val') }
        }).done(function(msg) {
            update_data_ajax();
        });
        $('.select-country').removeClass('active');
        $(this).addClass('active');
    });


    function update_data_ajax() {
        $('.ajax-result-6.val').css('opacity', '0.05');
        $('.response-ajax.val').prepend('<div class="text-center loading-image-pricing" style="position:absolute;width:100%;z-index:1"><i class="fas fa-circle-notch fa-spin" style="display:inline-block;font-size:80px;color:#4099ff;margin-top:40px;z-index:1"></i><div>');
        $.ajax({
            method: "get",
            url: "/getDataAjax",
            data: {}
        }).done(function(msg) {
            $('#res6').text(msg['auk'].toFixed(2));
            $('#res5').text(msg['e80'].toFixed(2));
            $('#res4').text(msg['e90'].toFixed(2));
            $('#res3').text(msg['e925'].toFixed(2));
            $('#res2').text(msg['e958'].toFixed(2));
            $('#res1').text(msg['e999'].toFixed(2));
            $('.ajax-result-6').css('opacity', '1');
            $('.loading-image-pricing').remove();
        });
        $('.select-day').removeClass('active');
        $('.select-day').last().addClass('active');
        get_chart_api();
    }

    function update_currency_text() {
        $('.current_currency').text($('#select-currency option:selected').html());
    }
    update_currency_text();

    function get_chart_api(type) {
        // $('.select-day').removeClass('active');
        // $('.select-day').last().addClass('active');
        $('.mychart').empty();
        $('.mychart').append('<canvas id="myChart"  height="250" class="ajax-result-6  col-12 mychart" style="width:100%!important;min-width:100%!important"></canvas>');
        $('.ajax-result-6.mychart').css('opacity', '0.05');
        $('.response-ajax.mychart').prepend('<div class="text-center loading-image-pricing" style="position:absolute;width:100%;z-index:1"><i class="fas fa-circle-notch fa-spin" style="display:inline-block;font-size:80px;color:#4099ff;margin-top:40px;z-index:1"></i><div>');
        $.ajax({
            method: "get",
            url: "/get_chart_api",
            data: {
                type
            }
        }).done(function(msg) {
            setTimeout(function() {
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [Object.keys(msg[0]), Object.keys(msg[1]), Object.keys(msg[2]), Object.keys(msg[3]), Object.keys(msg[4]), Object.keys(msg[5]), Object.keys(msg[6])],
                        datasets: [{
                            label: 'تغير الاسعار',
                            data: [msg[0][Object.keys(msg[0])],
                                msg[1][Object.keys(msg[1])],
                                msg[2][Object.keys(msg[2])],
                                msg[3][Object.keys(msg[3])],
                                msg[4][Object.keys(msg[4])],
                                msg[5][Object.keys(msg[5])],
                                msg[6][Object.keys(msg[6])]
                            ],
                            @if(session('site_type') == 'silver')
                            backgroundColor: 'rgba(6, 122, 255, 0.77)',
                            borderColor: '#2289ff',
                            @elseif(session('site_type') == 'gold')
                            backgroundColor: 'rgba(245, 213, 137, 0.78)',
                            borderColor: 'rgb(248, 180, 24,1)',
                            @endif

                            pointStyle: 'rect',
                            lineTension: '.15'

                        }]
                    },
                    options: {

                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: false,
                                    padding: 25,
                                },


                            }],
                            xAxes: [{
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }
                            }],

                        },
                        hover: {
                            mode: 'index'
                        },
                        legend: {
                            labels: {

                                fontFamily: 'Tajawal',
                                defaultFontFamily: 'Tajawal',
                            }
                        },
                        elements: {
                            line: {
                                tension: 1
                            }
                        }
                    }
                });
            }, 10);
            $('.ajax-result-6.mychart').css('opacity', '1');
            $('.loading-image-pricing').remove();
        });
    }

    get_chart_api("auk");

    </script>


    <link rel="stylesheet" href="https://nafezly.com/css/fontawsome.min.css">
    {{-- <script src="{{env('PUBLIC_PATH')}}/js/font-awsome.min.js"></script> --}}
    @if(session('language')=="ar" && $api['footer']->footer_ar_enabled==1)
    {!!$api['footer']->footer_ar!!}
    @elseif($api['footer']->footer_en_enabled==1)
    {!!$api['footer']->footer_en!!}
    @endif


</body>

</html>
