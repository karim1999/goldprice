<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Ixudra\Curl\Facades\Curl;
use \Torann\GeoIP\Facades\GeoIP;
use Google\Cloud\Translate\TranslateClient;
use Stichoza\GoogleTranslate\GoogleTranslate;

class DataController extends Controller
{


    public $api;

    public function __construct(){
        $this->api=$this->get_content();
        $this->set_init_sessions();
    }

    public function changeSiteType(Request $request)
    {
        session(['site_type'=>strtolower($request->price)]);

        return redirect()->route('index');
    }

    public function selectLang(Request $request)
    {

        if($request->lang=="ar")
            session(['language'=>'ar']);
        else
            session(['language'=>'en']);


        //session(['site_lang'=>strtolower($request->lang)]);
        return redirect()->route('index');
    }










    /*

        public function goldPrice(Request $request){
            session(['site_lang'=>'ar']);
            session(['site_type'=>'gold']);
            return $this->index($request);
        }*/


    /* session('site_type')='gold';
     session(['site_type'=>'gold']);
     session('language')='ar';
     session(['site_lang'=>'ar']);*/


    /*
       session('site_type')=session('site_type');
       session('language')=session('language');  */


    public function currency_index($currency_name)
    {
        $currency = Currency::where("value", $currency_name)->orWhere("ar_name", $currency_name)->orWhere("en_name", $currency_name)->first();
        session(['currency' => $currency->value]);
        return $this->index(new Request());
    }

    public function index(Request $request)
    {


        $api=$this->api;
        app()->setLocale(session('language'));
        if(!session('mode'))session(['mode'=>'day']);
        $data=$this->getCurrenciesAPI();//get all currencies api from goldprice.org depends on country
        $currencies=$this->getAllCurrencies();//get all countries
        //$this->setPricesCountries($data);//set Prices session to be converted when user change currency
        $countries=$this->getStoredCountries(); //get all countries from db;

        $conv = $this->convertCurrency();// convert currency with https://www.freeforexapi.com/api/live?pairs=EURUSD

        $news =$this->getStoredNews(); //get stored news
        //$languages=$this->getSiteAvailableLangs();//get dashboard stored Languages
        //$current_language=\App\Language::where('shortcut_name',session('language'))->get()->first();
        //$texts=  \App\Text::where('language_id',$current_language['id'])->get()->first();
        //$footer=$this->getFooter();
        $footer_images=$this->getFooterImages();
        $seo=\App\Seo::get()->first();

        if(!isset($data['price']))$data['price']=0;

        if(session('site_type')=='silver')
            $arrayName=  array(
                'auk' =>($data['price'])*$conv,
                'e999' =>($data['price']/31.1)*$conv,
                'e958' =>(($data['price']/31.1)*0.948148148)*$conv,
                'e925' =>(($data['price']/31.1)*0.924257932)*$conv,
                'e90' =>(($data['price']/31.1)*0.900716479)*$conv,
                'e80' =>(($data['price']/31.1)*0.798362334)*$conv,
                'currency' =>session('currency'),
                'days' => $this->getDays(session('language')),
                'currencies'=>$currencies,
                'countries'=>$countries,
                'news'=>$news,
                'api'=>$api


            );
        else
            $arrayName=  array(
                'auk' =>($data['price'])*$conv,
                'e999' =>($data['price']/31.1)*$conv,
                'e958' =>(($data['price']/31.1)*0.916677674)*$conv,
                'e925' =>(($data['price']/31.1)*0.875016511)*$conv,
                'e90' =>(($data['price']/31.1)*0.750006604)*$conv,
                'e80' =>(($data['price']/31.1)*0.583335535)*$conv,
                'currency' =>session('currency'),
                'days' => $this->getDays(session('language')),
                'currencies'=>$currencies,
                'countries'=>$countries,
                'news'=>$news,
                'api'=>$api
            );
        return view('silver.silver',$arrayName);

    }


    public function update_data_date(Request $request)
    {
        return $this->getDataAjax($request->day);
    }


    public function update_currency_session(Request $request){
        if(session([ 'currency' => $request->currency ]) ) {
            return 'done';
        }
        return 'failed';
    }

    public function update_country_session(Request $request){

        session([ 'country' => $request->country] );
        return 0;
    }


    public function getSiteAvailableLangs()
    {
        $langs=\App\Language::get();
        return $langs;
    }


    public function getFooter()
    {
        $footer=\App\Footer::get()->first();
        return $footer;
    }

    public function getFooterImages(){
        $footer_images=\App\FooterImgs::get();
        return $footer_images;
    }


    public function get_chart_api(Request $request)
    {
        $type = "auk";
        if ($request->get('type')) {
            $type = $request->get('type');
        }
        $days=$this->getDays(session('language'));
        $conv = $this->convertCurrency();
        $datax=array();
        $arrayName = array();

        if (session('site_type') == 'silver')
            $arrayName = array(
                'auk' => $conv,
                'e999' => (1 / 31.1) * $conv,
                'e958' => ((1 / 31.1) * 0.948148148) * $conv,
                'e925' => ((1 / 31.1) * 0.924257932) * $conv,
                'e90' => ((1 / 31.1) * 0.900716479) * $conv,
                'e80' => ((1 / 31.1) * 0.798362334) * $conv,
            );
        else
            $arrayName = array(
                'auk' => (1) * $conv,
                'e999' => (1 / 31.1) * $conv,
                'e958' => ((1 / 31.1) * 0.916677674) * $conv,
                'e925' => ((1 / 31.1) * 0.875016511) * $conv,
                'e90' => ((1 / 31.1) * 0.750006604) * $conv,
                'e80' => ((1 / 31.1) * 0.583335535) * $conv,
            );

        for($i=0; $i<count($days); $i++) {
            $temp=\App\Price::where('date',$days[$i][0].' 00:00:00')->where('country',session('country'))->where('type',session('site_type'))->get('price')->first();
            if (isset($temp['price'])) {
                $pricex = $temp['price'] * $arrayName[$type];
            }
            if(isset($temp['price']))
                array_push($datax, array($days[$i][0] => $pricex));
            else
                array_push($datax, array(  $days[$i][0]=>0 ));

        }

        return  $datax;

    }


    public function storeDataFromAPI(Request $request){


        $currencies=\App\Currency::get();


        for($i=0; $i<count($currencies); $i++) {
            $x=new \App\Country;
            $x->ar_name=$currencies[$i]->ar_name;
            $x->en_name=$currencies[$i]->en_name;
            $x->value=$currencies[$i]->value;
            $temp=$currencies[$i]->value;
            $x->flag=  strtolower($temp[0]).strtolower($temp[1]);
            $x->save();
            /*$cur=\App\Currency::where('id',$currencies[$i]->id)->update([
                'id'=>$i+1
            ]);*/

        }
        return 0;


        /*    $response = Unirest\Request::post("https://sa-translate.p.rapidapi.com/translate/text",
              array(
                "X-RapidAPI-Host" => "sa-translate.p.rapidapi.com",
                "X-RapidAPI-Key" => "1c0c254327msh43d0663e8dadba2p1d1660jsn13541a3d52d9",
                "Content-Type" => "application/json"
              ),
                array  (
              "{\"text\":\"Provide some text you would like to translate into another language\",\"targetLanguage\":\"pt\"}"
          )
            );
        */


    }


    public function test(){
        return sesstion('currency');
    }

    public function translate()
    {


        session([ 'tempo' => 0 ]);
        $tr = new GoogleTranslate('ar');
        $currencies=json_decode( file_get_contents('https://openexchangerates.org/api/currencies.json') );


        for($i=session('tempo'); $i<count((array)$currencies); $i++){

            session([ 'tempo' => $i ]);

            $temp=array_keys((array)$currencies)[session('tempo')];
            $save=new \App\Currency;
            $save->ar_name= $tr->setSource('en')->setTarget('ar')->translate($currencies-> $temp);
            $save->en_name=$currencies-> $temp;
            $save->value=$temp;
            $save->save();


        }

        return 0;
    }


    //finished functions
    public function update_dark_mode_session(Request $request){

        if($request->mode=='night') {
            session([ 'mode' => 'night' ]);
            return 'done';
        } else {
            session([ 'mode' => 'day' ]);
            return 'done';
        }
        return 'failed';
    }


    public function getCurrenciesAPI($cust_day=null){

        $day;
        if($cust_day==null) {
            $day=date("Y-m-d",abs(strtotime("today"))).' 00:00:00';
        } else {
            $day= $cust_day;
        }

        $price=\App\Price::where('country',session('country'))->where('date',$day)->where('type',session('site_type'))->get()->first();
        return $price;

        //return json_decode( file_get_contents('https://data-asg.goldprice.org/dbXRates/'.session('country')) );
    }


    public function getAllCurrencies(){


        return \App\Currency::get();
    }

    public function getStoredCountries(){
        return \App\Country::get();
    }

    public function getDataAjax($day=null){

        $data=$this->getCurrenciesAPI($day);
        $conv = $this->convertCurrency();


        $arrayName;
        if(session('site_type')=='silver') {
            if(!isset($data['price']))$data['price']=0;

            $arrayName=  array(
                'auk'  =>    ($data['price'])*$conv,
                'e999' =>    ($data['price']/31.1)*$conv,
                'e958' =>   (($data['price']/31.1)*0.948148148)*$conv,
                'e925' =>   (($data['price']/31.1)*0.924257932)*$conv,
                'e90'  =>   (($data['price']/31.1)*0.900716479)*$conv,
                'e80'  =>   (($data['price']/31.1)*0.798362334)*$conv,
            );
        } else {

            if(!isset($data['price']))$data['price']=0;
            $arrayName=  array(
                'auk' =>($data['price'])*$conv,
                'e999' =>($data['price']/31.1)*$conv,
                'e958' =>(($data['price']/31.1)*0.916677674)*$conv,
                'e925' =>(($data['price']/31.1)*0.875016511)*$conv,
                'e90' =>(($data['price']/31.1)*0.750006604)*$conv,
                'e80' =>(($data['price']/31.1)*0.583335535)*$conv,
            );
        }


        return $arrayName;
    }

    public function convertCurrency(){


        $current_currency= session('currency');
        $current_country=  session('country');

        // $peter=\App\Currency_price::get();
        //return $peter;


        $currency_db=\App\Currency_price::where('currency',$current_currency)->get()->first();
        $country_db=\App\Currency_price::where('currency',$current_country)->get()->first();
//        if($country_db)
            return ($country_db['price']!=0)?($currency_db['price']/$country_db['price']):0;
//        else
//            return 0;
        /*
                $convert_from_usd_to_country=json_decode (file_get_contents('https://www.freeforexapi.com/api/live?pairs=USD'.session('country')) ,true);
                $convert_from_usd_to_currency=json_decode (file_get_contents('https://www.freeforexapi.com/api/live?pairs=USD'.session('currency')),true );
                $temp1='USD'.session('country');
                $temp2='USD'.session('currency');
                $usdCountry=  $convert_from_usd_to_country['rates'][$temp1]['rate'];
                $usdCurrency= $convert_from_usd_to_currency['rates'][$temp2]['rate'];
                return $usdCurrency/$usdCountry;*/
    }

    /*  public function setPricesCountries($data){
            session([
              'auk' =>$data['price'],
              'e999' =>$data['price']/31.1,
              'e958' =>($data['price']/31.1)*0.948148148,
              'e925' =>($data['price']/31.1)*0.924257932,
              'e90' =>($data['price']/31.1)*0.900716479,
              'e80' =>($data['price']/31.1)*0.798362334,
              'currency_convert' =>session('currency'),
              ]);
      }*/

    public function getDays($language='ar'){
        if($language=='ar') {
            $days = array(
                '0'=>array(),
                '1'=>array(),
                '2'=>array(),
                '3'=>array(),
                '4'=>array(),
                '5'=>array(),
                '6'=>array(),
            );
            $today=date("Ymd",abs(strtotime("today")));

            for($i=6; $i>=0; $i--) {
                $d = date("Y-m-d", strtotime( $today." - $i day") );
                $days[$i][0]=$d;
                $arabicday=\DateTime::createFromFormat('Y-m-d', $days[$i][0])->format('D');
                if($arabicday=='Tue') $days[$i][1]='الثلاثاء';
                else if($arabicday=='Tue') $days[$i][1]='الثلاثاء';
                else if($arabicday=='Mon') $days[$i][1]='الاثنين';
                else if($arabicday=='Sun') $days[$i][1]='الاحد';
                else if($arabicday=='Sat') $days[$i][1]='السبت';
                else if($arabicday=='Fri') $days[$i][1]='الجمعة';
                else if($arabicday=='Thu') $days[$i][1]='الخميس';
                else if($arabicday=='Wed') $days[$i][1]='الاربعاء';

            }
            return array_reverse($days);
        } else {
            $days = array(
                '0'=>array(),
                '1'=>array(),
                '2'=>array(),
                '3'=>array(),
                '4'=>array(),
                '5'=>array(),
                '6'=>array(),
            );
            $today=date("Ymd",abs(strtotime("today")));

            for($i=6; $i>=0; $i--) {
                $d = date("Y-m-d", strtotime( $today." - $i day") );
                $days[$i][0]=$d;
                $days[$i][1]=\DateTime::createFromFormat('Y-m-d', $days[$i][0])->format('D');


            }
            return array_reverse($days);
        }
    }


    public function sore_countries(){
        $currs=\App\Currency::get();

        foreach($currs as $curr){
            $country=\App\Country::create(['ar_name'=>$curr->ar_name,'en_name'=>$curr->en_name,'value'=>$curr->value,'flag'=>$curr->value[0] . $curr->value[1] ] );
        }
        return 'f';

    }
    /*public function remove_invalide_currencies(){
        $currs=\App\Currency::get();

        foreach($currs as $curr){

            $temp=(array)json_decode( file_get_contents('https://data-asg.goldprice.org/dbXRates/'.$curr->value) );
            if(!isset($temp['items'][0]->xagPrice))
            {
                $remove=\App\Currency::where('value',$curr->value)->delete();
            }


        }
        return 'f';
    }*/

    /* public function store_countries_api(Request $request){
         session([ 'tempo' => 0 ]);
         $tr = new GoogleTranslate('ar');
         $currencies=json_decode( file_get_contents('https://openexchangerates.org/api/currencies.json') );
         for($i=session('tempo');$i<count((array)$currencies);$i++){

             session([ 'tempo' => $i ]);

             $temp=array_keys((array)$currencies)[session('tempo')];
             $save=new \App\Currency;
                $save->ar_name= $tr->setSource('en')->setTarget(session('language'))->translate($currencies-> $temp);
                $save->en_name=$currencies-> $temp;
                $save->value=$temp;
             $save->save();
         }

         return 0;
     }*/

    public function getStoredNews()
    {
        $news = \App\News::orderBy('id', 'DESC');
        $title = "gold";
        if (session('site_type') == 'silver') {
            if (session('language') == "ar") {
                $title = "فضة";
            } else {
                $title = "silver";
            }
        } else {
            if (session('language') == "ar") {
                $title = "ذهب";
            }
        }
        $news->where('tittle', 'like', '%' . $title . '%');
        return $news->get();
    }


    // daily


    public function daily(){
        set_time_limit(0);
        $this->daily_currency_price_store();
        $this->daily_price_store();
        $this->daily_news_store();
        echo "done";
    }


    public function daily_price_store(){


        \App\Price::where('date',date("Y-m-d",abs(strtotime("today"))).' 00:00:00')->delete();
        $countries=\App\Country::get();
        for($i=0; $i<count($countries); $i++) {
//            $temp=(array)json_decode( file_get_contents('https://data-asg.goldprice.org/dbXRates/'.$countries[$i]->value) );
            $temp=(array)Curl::to('https://data-asg.goldprice.org/dbXRates/'.$countries[$i]->value)->asJson()->get();;
            if(isset($temp['items'][0]->xagPrice)) {
                $price=new \App\Price;
                $price->date=date("Y-m-d",abs(strtotime("today"))).' 00:00:00';
                $price->type='silver';

                $price->price=($temp['items'][0]->xagPrice);
                $price->country=$countries[$i]->value;
                $price->save();
            }


            //json_decode( file_get_contents('https://data-asg.goldprice.org/dbXRates/USD') );
        }


        for($i=0; $i<count($countries); $i++) {
//            $temp=(array)json_decode( file_get_contents('https://data-asg.goldprice.org/dbXRates/'.$countries[$i]->value) );
            $temp=(array)Curl::to('https://data-asg.goldprice.org/dbXRates/'.$countries[$i]->value)->asJson()->get();;
            if(isset($temp['items'][0]->xauPrice)) {
                $price=new \App\Price;
                $price->date=date("Y-m-d",abs(strtotime("today"))).' 00:00:00';
                $price->type='gold';
                $price->price=($temp['items'][0]->xauPrice);
                $price->country=$countries[$i]->value;
                $price->save();
            }


            //json_decode( file_get_contents('https://data-asg.goldprice.org/dbXRates/USD') );
        }

        return 0;
    }


    public function daily_currency_price_store(){


        \App\Currency_price::where('id','<>','')->delete();

        $currs=\App\Currency::get();
//        $usd=(array)json_decode( file_get_contents('https://data-asg.goldprice.org/dbXRates/USD') );
        $usd=(array)Curl::to('https://data-asg.goldprice.org/dbXRates/USD')->asJson()->get();
        foreach($currs as $curr){
            //sleep(.01);
//            Log::debug($curr->value);

//            $temp=(array)json_decode( file_get_contents('https://data-asg.goldprice.org/dbXRates/'.$curr->value) );
            $temp = (array)Curl::to('https://data-asg.goldprice.org/dbXRates/'.$curr->value)->asJson()->get();

            //return $usd;
            //$temp['items'][0]->xagPrice;
            //return dd(isset($temp['items'][0]->xauPrice));
            if(isset($temp['items'][0]->xauPrice) ) {

                $currency_prices=new \App\Currency_price;
                $currency_prices->currency=$curr->value;
                $currency_prices->price= $temp['items'][0]->xauPrice /$usd['items'][0]->xauPrice;
                $currency_prices->date=date("Y-m-d",abs(strtotime("today"))).' 00:00:00';
                $currency_prices->save();


            }


            /* $convert_from_usd=json_decode (file_get_contents('https://www.freeforexapi.com/api/live?pairs=USD'.$curr[$i]->value) ,true);
             $temp1='USD'.$curr[$i]->value;
             if(isset($convert_from_usd['rates'][$temp1]['rate'])&& isset($convert_from_usd['rates'][$temp1]['rate']))
             {
                 $usdCountry=  $convert_from_usd['rates'][$temp1]['rate'];
                 $currency_prices=new \App\Currency_price;
                 $currency_prices->currency=$curr[$i]->value;
                 $currency_prices->price= $convert_from_usd['rates'][$temp1]['rate'];
                 $currency_prices->date=date("Y-m-d",abs(strtotime("today"))).' 00:00:00';
                 $currency_prices->save();
              }*/


        }
        return 1;
        // return 0;
    }

    public function daily_news_store(){


        \App\News::where('id','<>','')->delete();
        $aspiKey='12360df6e53648ed901bc9af0b4254ac';
        $array = array('ar', 'en');
        $keywords = array('gold', 'silver', 'ذهب', 'فضة');
        for($i=0; $i<count($array); $i++) {
            for ($j = 0; $j < count($keywords); $j++) {
//            $news_api= json_decode (file_get_contents('https://newsapi.org/v2/top-headlines?country='.$array[$i].'&category=business&apiKey='.$aspiKey) ,true);
                $news_api = Curl::to('https://newsapi.org/v2/everything?language=' . $array[$i] . '&sortBy=popularity&apiKey=' . $aspiKey . '&qInTitle=' . $keywords[$j])->asJson(true)->get();
                for ($x = 0; $x < count($news_api['articles']); $x++) {

                    $news = new \App\News;
                    $news->tittle = $news_api['articles'][$x]['title'];
                    $news->country = $array[$i];
                    $news->source = $news_api['articles'][$x]['author'];
                    $news->link = $news_api['articles'][$x]['url'];
                    $news->save();
//                print_r($news);
                }

            }


        }

        return 0;

    }


    //


    public function get_content(){
        $temp = (array)json_decode(file_get_contents('https://dash.devlab.ae/api/v1/site/' . env('APP_URL')));
        return $temp;
    }

    public function set_init_sessions(){


        if(null === (session('language'))){
            session(['language'=>env('DEFAULT_LANGUAGE')]);
        }


        if(null === (session('popup_status'))){
            session(['popup_status'=>'true']);
        }

        if(null === (session('header_status'))){
            session(['intro_status'=>'true']);
        }


        /*if(null === (session('adv_status'))){
            session(['adv_status'=>'false']);
        }

        if(null === (session('scroll_status'))){
            session(['scroll_status'=>'false']);
        }  */


    }


    public function turn_off_popup(){
        session(['popup_status'=>'false']);
    }

    public function turn_off_header(){
        session(['header_status'=>'false']);
    }

    public function switch_language(){
        if(null === (session('language'))){
            session(['language'=>'ar']);
        }
        if(session('language') =="ar")
            session(['language'=>'en']);
        else
            session(['language'=>'ar']);

        app()->setLocale(session('language'));

        return redirect()->route('index');
    }


}
