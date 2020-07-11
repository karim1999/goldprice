<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>الأكواد</title>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/iCheck/blue.css">
    <link rel="stylesheet" href="/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/css/codemirror.css">
    <link rel="stylesheet" href="/css/iCheck/blue.css">
    <link rel="stylesheet" href="/css/main.css">

 



    
</head>
<body dir="rtl">
<div class="loaderScreen">
    <div class="loader"></div>
</div>



<style type="text/css">
    input,textarea,select
    {
        outline: none!important;
        border-radius: 0px!important;
    }
    input,textarea,select
    {
        box-shadow: unset!important;
    }
    *:not(.fa):not(.far):not(.fas):not(.fab):not(.fal)
    {
      font-family: DIN-NEXT-BOLD, sans-serif!important;  
      font-weight: normal;
    }
    .nav-list >a.active li > div
    {
        background-color: #F5F5F6;
        cursor: pointer;
        color: #3498DB!important;
    }
    .row
    {
        margin: 0px;
    }
</style>
<header class="d-flex justify-content-between align-items-center">
    <div class="logo d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38.399" height="40" viewBox="0 0 38.399 40"><defs><clipPath id="a"><rect width="38.4" height="40" transform="translate(171.571 162.617)" fill="#3498db"/></clipPath></defs><g transform="translate(-171.571 -162.617)"><g clip-path="url(#a)"><path d="M190.112,162.617c.834.463,3.672,2.345,3.672,5.742,0,3.005-4.848,11.977-2.972,14.308l12.035-15s2.989,3.641,1.2,6.72c-1.863,3.2-6.47,6.955-8.315,9.745-1.141,1.725-.586,2.649-.586,2.649l14.584-7.988a5.87,5.87,0,0,1-1.6,5.974c-2.929,2.638-9.827,3.685-9.827,6.434h10.017s-1.024,3.035-2.959,3.462c-1.707.377-5.36-.62-7.082.93-1.818,1.637-3.862,7.021-9.961,7.021-4.1,0-7.284-2.958-9.26-6.844-2.283-4.491-4.841-6.653-7.478-7.2a5.855,5.855,0,0,1,5.219-3.395c5.2,0,7.43,8.527,11.357,8.527a2.134,2.134,0,0,0,2.333-2.256c0-1.81-2.609-3.31-3.336-3.815a5.321,5.321,0,0,1-2.22-6.329l5.188-18.684" transform="translate(0)" fill="#3498db"/></g></g></svg>
        <h4 class="name">شعار إفتراضي</h4>
        <div class="navBtn mr-4">
            <i class="fas fa-stream d-md-none"></i>
        </div>
    </div>
    <a href="/admin/login">
        <p class="logout">تسجيل الخروج</p>
    </a>
</header>


<div class="wrapper" style="direction: rtl">
    <nav id="right-nav">
        <ul class="list-unstyled nav-list">
            <a href="/admin/index">
                <li>
                    <div class="liContainer d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g transform="translate(-272 -22)"><rect width="20" height="20" transform="translate(272 22)" fill="#fff" opacity="0"/><g transform="translate(272 22)"><g transform="translate(0)"><g transform="translate(0 0)"><path d="M19.664,21.121l-8.973-8.176a1.021,1.021,0,0,0-1.382,0L.336,21.121A1.026,1.026,0,0,0,1.027,22.9H2.46V31.1a.588.588,0,0,0,.588.588H7.966a.588.588,0,0,0,.588-.588V26.123h2.891V31.1a.588.588,0,0,0,.588.588h4.918a.588.588,0,0,0,.588-.588V22.9h1.433a1.025,1.025,0,0,0,.691-1.784Z" transform="translate(0 -12.675)"/></g></g><g transform="translate(13.436 1.174)"><path d="M347.923,42.73h-3.95l4.538,4.126V43.318A.588.588,0,0,0,347.923,42.73Z" transform="translate(-343.973 -42.73)"/></g></g></g></svg>
                        <p>الصفحه الرئيسية</p>
                    </div>
                </li>
            </a>
  {{--           <a href="/admin/viewTexts">
                <li>
                    <div class="liContainer d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g transform="translate(-47.786)"><g transform="translate(47.786)"><g transform="translate(0)"><path d="M66.966,0H48.606a.755.755,0,0,0-.82.667V3.333a.252.252,0,0,0,.273.222H67.513a.252.252,0,0,0,.273-.222V.667A.755.755,0,0,0,66.966,0Z" transform="translate(-47.786)"/></g></g><g transform="translate(47.786 4.889)"><g transform="translate(0)"><path d="M67.514,125.156H48.06a.252.252,0,0,0-.273.222V139.6a.755.755,0,0,0,.82.667H66.967a.755.755,0,0,0,.82-.667V125.378A.252.252,0,0,0,67.514,125.156ZM63.8,137.334H51.776a.681.681,0,1,1,0-1.333H63.8a.681.681,0,1,1,0,1.333Zm0-2.622H51.776a.681.681,0,1,1,0-1.333H63.8a.681.681,0,1,1,0,1.333Zm0-2.622H51.776a.681.681,0,1,1,0-1.333H63.8a.681.681,0,1,1,0,1.333Zm0-2.667H51.776a.681.681,0,1,1,0-1.333H63.8a.681.681,0,1,1,0,1.333Z" transform="translate(-47.787 -125.156)"/></g></g></g></svg>
                        <p>عرض النصوص</p>
                    </div>
                </li>
            </a> --}}
            <a href="/admin/footer">
                <li>
                    <div class="liContainer d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19.999" viewBox="0 0 20 19.999"><g transform="translate(-731 -495)"><path d="M750.167,495H731.833a.833.833,0,0,0-.833.833V500h20v-4.167a.833.833,0,0,0-.833-.833Zm-6.834,3.167a.833.833,0,1,1,.833-.833h0A.834.834,0,0,1,743.333,498.167Zm2.5,0a.833.833,0,1,1,.833-.833A.833.833,0,0,1,745.833,498.167Zm2.5,0a.833.833,0,1,1,.833-.833A.833.833,0,0,1,748.333,498.167Z"/><rect width="20" height="7.5" transform="translate(731 501.667)"/><path d="M731,514.166a.833.833,0,0,0,.833.833h18.334a.833.833,0,0,0,.833-.833h0v-3.333H731Z"/></g></svg>
                        <p>الفوتر</p>
                    </div>
                </li>
            </a>
            <a href="/admin/seo">
                <li>
                    <div class="liContainer d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g transform="translate(-272 -22)"><rect width="20" height="20" transform="translate(272 22)" opacity="0"/><g transform="translate(272 21.998)"><g transform="translate(0 18.83)"><path d="M19.414,482H.586a.586.586,0,1,0,0,1.172H19.414a.586.586,0,1,0,0-1.172Z" transform="translate(0 -481.999)"/></g><g transform="translate(1.172 12.971)"><path d="M34.18,332H30.586a.586.586,0,0,0-.586.586v4.1h4.766v-4.1A.586.586,0,0,0,34.18,332Z" transform="translate(-30 -332)" /></g><g transform="translate(7.109 9.455)"><path d="M186.1,242h-3.516a.586.586,0,0,0-.586.586V250.2h4.687v-7.617A.586.586,0,0,0,186.1,242Z" transform="translate(-181.998 -242)" /></g><g transform="translate(10.625 0.002)"><g transform="translate(0 0)"><path d="M281.2,4.861,277.1.173a.586.586,0,0,0-.829,0l-4.1,4.687a.586.586,0,0,0,.414,1h1.758v11.8h4.688V5.861h1.758a.586.586,0,0,0,.414-1Z" transform="translate(-271.994 -0.002)" /></g></g></g></g></svg>
                        <p>إعدادات السيو</p>
                    </div>
                </li>
            </a>
            <a href="/admin/codes">
                <li>
                    <div class="liContainer d-flex align-items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g transform="translate(0)"><path d="M20,3.9V.64A.618.618,0,0,0,19.406,0H.593A.618.618,0,0,0,0,.64V3.9ZM18.353,1.351a.629.629,0,0,1,.594.64.6.6,0,1,1-1.187,0A.625.625,0,0,1,18.353,1.351Zm-1.864,0a.629.629,0,0,1,.594.64.6.6,0,1,1-1.187,0A.626.626,0,0,1,16.49,1.351Zm-1.864,0a.629.629,0,0,1,.594.64.6.6,0,1,1-1.187,0A.626.626,0,0,1,14.626,1.351Zm0,0"/><path d="M0,122.891v14.181a.618.618,0,0,0,.594.64H19.406a.618.618,0,0,0,.594-.64V122.891Zm7.342,8.979a.677.677,0,0,1,0,.906.564.564,0,0,1-.84,0l-2.467-2.661a.677.677,0,0,1,0-.906L6.5,126.547a.564.564,0,0,1,.84,0,.677.677,0,0,1,0,.906l-2.047,2.208Zm4.241-4.622-2.071,5.323a.6.6,0,0,1-.548.393.555.555,0,0,1-.229-.05.66.66,0,0,1-.318-.838l2.071-5.323a.579.579,0,0,1,.777-.343A.66.66,0,0,1,11.583,127.248Zm4.382,2.866L13.5,132.776a.564.564,0,0,1-.84,0,.677.677,0,0,1,0-.906l2.047-2.208-2.047-2.208a.677.677,0,0,1,0-.906.563.563,0,0,1,.84,0l2.467,2.661A.677.677,0,0,1,15.965,130.114Zm0,0" transform="translate(0 -117.713)"/></g></svg>
                        <p>الأكواد</p>
                    </div>
                </li>
            </a>
            <a href="/admin/texts">
                <li>
                    <div class="liContainer d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.333" height="20" viewBox="0 0 18.333 20"><path d="M120.834,2.292A2.291,2.291,0,0,0,118.543,0h-9.583a2.291,2.291,0,0,0-2.292,2.292v11.25a2.291,2.291,0,0,0,2.292,2.292h9.583a2.291,2.291,0,0,0,2.292-2.292Zm-3.958,9.792h-6.25a.625.625,0,0,1,0-1.25h6.25a.625.625,0,0,1,0,1.25Zm0-2.5h-6.25a.625.625,0,0,1,0-1.25h6.25a.625.625,0,0,1,0,1.25Zm0-2.5h-6.25a.625.625,0,0,1,0-1.25h6.25a.625.625,0,0,1,0,1.25Zm0,0" transform="translate(-102.501)"/><path d="M6.458,68.332A3.545,3.545,0,0,1,2.917,64.79V53.54c0-.072.017-.138.021-.208H2.292A2.294,2.294,0,0,0,0,55.624V68.957a2.294,2.294,0,0,0,2.292,2.292h10a2.293,2.293,0,0,0,2.292-2.292v-.625Zm0,0" transform="translate(0 -51.249)"/></svg>
                        <p>محتوى الصفحات</p>
                    </div>
                </li>
            </a>

            <a href="/admin/languages">
                <li>
                    <div class="liContainer d-flex align-items-center">
                        <img src="/images/language.svg" style="width: 20px;height: 20px;">                        <p>اللغات</p>
                    </div>
                </li>
            </a>


            <li class="treeview">
                <div class="liContainer tree d-flex align-items-center mb-3"  data-toggle="collapse" href="#settings">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.829" height="20" viewBox="0 0 19.829 20"><g id="Site_Settings_icon" data-name="Site Settings icon" transform="translate(-0.501 0)"><path id="Path_132" data-name="Path 132" d="M182.253,181a2.93,2.93,0,1,0,2.929,2.93A2.933,2.933,0,0,0,182.253,181Zm0,0" transform="translate(-171.838 -173.929)"/><path id="Path_133" data-name="Path 133" d="M20.037,12.162l-1.092-.631a1.767,1.767,0,0,1,0-3.062l1.092-.631a.586.586,0,0,0,.214-.8L17.9,2.962a.586.586,0,0,0-.8-.215l-1.092.631a1.767,1.767,0,0,1-2.651-1.531V.586A.586.586,0,0,0,12.769,0H8.062a.586.586,0,0,0-.586.586V1.848A1.767,1.767,0,0,1,4.825,3.378L3.733,2.748a.586.586,0,0,0-.8.215L.579,7.039a.586.586,0,0,0,.214.8l1.092.631a1.767,1.767,0,0,1,0,3.062l-1.092.631a.586.586,0,0,0-.215.8l2.353,4.076a.586.586,0,0,0,.8.215l1.092-.631a1.767,1.767,0,0,1,2.651,1.531v1.261A.586.586,0,0,0,8.062,20h4.706a.586.586,0,0,0,.586-.586V18.153a1.767,1.767,0,0,1,2.651-1.531l1.092.631a.586.586,0,0,0,.8-.215l2.353-4.076a.586.586,0,0,0-.214-.8ZM10.415,14.1a4.1,4.1,0,1,1,4.1-4.1,4.106,4.106,0,0,1-4.1,4.1Zm0,0" /></g></svg>
                    <p>إعدادات الموقع</p>
                    <i class="fas fa-caret-down"></i>
                </div>
                <ul class="list-unstyled sub-tree collapse" id="settings">
                    <a href="/admin/styles"><li>خيارات الأنماط</li></a>
                    <a href="/admin/intromsg"><li>الرسالة الأفتتاحية</li></a>
                    <a href="/admin/popup"><li>الرسالة المنبثقه</li></a>
                    <a href="/admin/header"><li>الهيدر</li></a>
                    <a href="/admin/notfound"><li>صفحة الخطأ 404</li></a>
                </ul>
            </li>
            <a href="/admin/customOptions">
                <li>
                    <div class="liContainer d-flex align-items-center last">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.334" height="20" viewBox="0 0 21.334 20"><g transform="translate(0 -16)"><g transform="translate(0 16)"><path d="M4.375,16A4.375,4.375,0,1,0,8.75,20.375,4.38,4.38,0,0,0,4.375,16Z" transform="translate(0 -16)"/></g><g transform="translate(7.867 16)"><path d="M197.9,16h-9.091a5.553,5.553,0,0,1,0,8.75H197.9a4.375,4.375,0,0,0,0-8.75Z" transform="translate(-188.806 -16)"/></g><g transform="translate(12.583 27.25)"><path d="M306.375,286a4.375,4.375,0,1,0,4.375,4.375A4.38,4.38,0,0,0,306.375,286Z" transform="translate(-302 -286)"/></g><g transform="translate(0 27.25)"><path d="M11.333,290.375A5.594,5.594,0,0,1,13.466,286H4.375a4.375,4.375,0,0,0,0,8.75h9.091A5.594,5.594,0,0,1,11.333,290.375Z" transform="translate(0 -286)" /></g></g></svg>
                        <p>خيارات مخصصة</p>
                    </div>
                </li>
            </a>
        </ul>
    </nav>

  



    <?php $count=count($errors->all()); ?>
    @if(session()->has('data') || $count )   
     
        <div style=" width: 400px; background: #101c2f;z-index: 111;float: left;position: fixed;left: 40px;top:80px;opacity: .9;padding: 12px;border-radius: 5px;cursor: pointer;padding-bottom: 22px" class="col-sm-12 row cust-alert">
            <p style="color: #fff;"> 
            <div class="col-sm-12 row" style="padding: 0px;">
                


                <div class="col-sm-12 row" style="padding: 0px;color: #fff">

                    @if(session()->has('data'))
                    <div class="col-sm-12 row" style="margin-top: 4px; padding-right: 70px;">
                        <div class="col-3">
                            <div class="col-sm-12 row">
                                <span class="fa fa-info btn-{{  session('data')['alert-type'] }}" style="color: #fff;padding: 6px 10px;border-radius: 50%;border:1px solid #eee"></span>
                            </div>
                        </div>
                        <div class="col-9 harma" style="padding: 5px ;text-align: right;">
                            {{  session('data')['alert'] }} 
                        </div>
                    </div>
                    @endif
                
                
               
                @foreach ($errors->all() as $message) 
                <div class="col-sm-12 row" style="margin-top: 4px;padding-right: 70px;">
                    <div class="col-3">
                        <div class="col-12 row">
                            <span class="fa fa-info btn-danger" style="color: #fff;padding: 6px 10px;border-radius: 50%;border:1px solid #eee"></span>
                        </div>
                    </div>
                    <div class="col-9 harma" style="padding: 5px ;text-align: right;">
                        {{ $message }}
                    </div>
                </div>
                @endforeach
              
                    
                </div>
            </div>       
            </p>
        </div>
    @endif


   





    @yield('content')
</div>





<script src="/js/jquery.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/loader.js"></script>
<script src="/js/icheck.min.js"></script>
<script src="/js/jquery.overlayScrollbars.min.js"></script>
<script src="/js/nav.js"></script>


<script src="/js/codemirror.js"></script>

<script src="/js/mode/javascript/javascript.js"></script>
<script src="/js/mode/css/css.js"></script>
<script src="/js/subTree.js"></script>

<script src="/js/sweetAlert.js"></script>
<script src="/js/logoUpload.js"></script>


<script type="text/javascript">
    
    $(function () {
        $('.checkbox').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'icheckbox_square-blue',

        });
    });
</script>

<script type="text/javascript">

    <?php 
    $path_info = $_SERVER['REQUEST_URI']; 
    $startPath=explode( '/',$path_info);
    ?>
    var x = "{{'/'.$startPath[1].'/'.$startPath[2]}}";
    $('.nav-list > a').each(function(){
        if(x==$(this).attr('href'))
        {
            $(this).addClass('active');
        }
     });

 
   
</script>

 <script type="text/javascript">
        setInterval(function(){
            $('.cust-alert').fadeOut('slow');
        },8000);
        $('.cust-alert').on('click',function(){
            $(this).fadeOut();
        });
    </script>


</body>
</html>