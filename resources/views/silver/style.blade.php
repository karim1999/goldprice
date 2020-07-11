<style type="text/css">
      @if(session('mode')=='day'&&session('site_type')=='silver') html {
            --main-bg-color: #f5f7fb;
            --main-color: #fff;
            --second-bg-color: #b3b3b3;
            --golden-color: #2289ff;
            --right-graident-color: #0d7dff;
            --left-graident-color: #33ccff;
            --main-font-color: #4d4d4d;
            --second-font-color: #8e8e8f;
            --third-font-color: #cecece;
            --color: #fff;
            --inverse-color: var(--second-font-color);
            --box-shadow-color: #bec5d2;

        }
        @elseif(session('mode')=='night'&&session('site_type')=='silver') html {
            --main-bg-color: #171734;
            --main-color: #242448;
            --second-bg-color: #b3b3b3;
            --golden-color: #2289ff;
            --right-graident-color: #0d7dff;
            --left-graident-color: #33ccff;
            --main-font-color: #fff;
            --second-font-color: #fff;
            --third-font-color: #cecece;
            --color: #fff;
            --inverse-color: #fff;
            --box-shadow-color: transparent;

        }

        @elseif(session('mode')=='day'&&session('site_type')=='gold') html {
            --main-bg-color: #f5f7fb;
            --main-color: #fff;
            --second-bg-color: #b3b3b3;
            --golden-color: #fbb901;
            --right-graident-color: #0d7dff;
            --left-graident-color: #33ccff;
            --main-font-color: #4d4d4d;
            --second-font-color: #8e8e8f;
            --third-font-color: #cecece;
            --color: #fff;
            --inverse-color: var(--second-font-color);
            --box-shadow-color: #bec5d2;

        } 
        @elseif(session('mode')=='night'&&session('site_type')=='gold') html {
            --main-bg-color: #171734;
            --main-color: #242448;
            --second-bg-color: #b3b3b3;
            --golden-color: #fbb901;
            --right-graident-color: #0d7dff;
            --left-graident-color: #33ccff;
            --main-font-color: #fff;
            --second-font-color: #fff;
            --third-font-color: #cecece;
            --color: #fff;
            --inverse-color: #fff;
            --box-shadow-color: transparent;

        }
        @endif


        *{
            font-weight: normal;
        }

        @if( session('language') !==null && session('language')!='ar' )
        @else
       
        * {
            direction: rtl!important;
        } 
        
        @endif

</style>