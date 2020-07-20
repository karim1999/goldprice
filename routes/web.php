<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Analytics as Analytics;
use Spatie\Analytics\Period;
use Edujugon\GoogleAds\GoogleAds;



/*use \Illuminate\Support\Collection;
*/

/*Auth::routes();*/
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'DataController@index')->name('index');
Route::get('/policy', 'DataController@policy')->name('index');
Route::get('/country/{value}', 'DataController@currency_index');
Route::get('/currency/{value}', 'DataController@currency_index');
Route::get('/getdata', 'DataController@storeDataFromAPI');

Route::get('/update_mode', 'DataController@update_dark_mode_session');
Route::get('/update_currency', 'DataController@update_currency_session');
Route::get('/update_country', 'DataController@update_country_session');


Route::get('/getDataAjax', 'DataController@getDataAjax');
Route::get('/update_data_date', 'DataController@update_data_date');
Route::get('/get_chart_api', 'DataController@get_chart_api');
//Route::get('/silver-price','DataController@index' );
//Route::get('/gold-price','DataController@goldPrice' );
//Route::get('/g', function(){return view('gold.gold'); });



Route::get('/price/{price}','DataController@changeSiteType' );
//Route::get('/price/{price}','DataController@changeSiteType' );
Route::get('/lang/{lang}','DataController@selectLang' );
//Route::get('/lang/{lang}','DataController@selectLang' );



//Route::get('/translate', 'DataController@translate');

//daily
Route::get('/daily', 'DataController@daily');





Route::get('/turn_off_popup', 'EmojiController@turn_off_popup')->name('turn_off_popup');
Route::get('/turn_off_header', 'EmojiController@turn_off_header')->name('turn_off_header');
Route::get('/switch_language', 'EmojiController@switch_language')->name('switch_language');



//test

/*Route::get('/test2','GoogleController@index');

Route::get('/test','DataController@daily_currency_price_store'*/ /*function(){

 	return session('currency');

	$client = new Google_Client();
	$client->setApplicationName("Client_Library_Examples");
	$client->setDeveloperKey("YOUR_APP_KEY");

	$service = new Google_Service_Books($client);
	$optParams = array('filter' => 'free-ebooks');
	$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

	foreach ($results as $item) {
	  echo $item['volumeInfo']['title'], "<br /> \n";
	}




	$ads = new GoogleAds();

	$ads->oAuth([
            'clientId' => 'test',
            'clientSecret' => 'test',
            'refreshToken' => 'TEST'

        ]);


	return var_dump($ads->service(CampaignService::class));

	$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));


$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));


$analyticsData = Analytics::performQuery(
    Period::years(1),
    'ga:sessions',
    [
        'metrics' => 'ga:sessions, ga:pageviews',
        'dimensions' => 'ga:yearMonth'
    ]
);


return var_dump($analyticsData);
}

);
*/







Route::prefix('admin')->group(function () {


	/*Route::get('/404',function(){return view('admin.404');});
 	Route::get('/pages',function(){return view('admin.pages');});
*/
 	/*Route::resource('languages','LanguagesController');
 	Route::resource('texts','TextsController');
 	Route::resource('seo','SeoController');
 	Route::resource('codes','CodesController');
 	Route::resource('footer','FooterController');*/



 	//settings
 	/*Route::resource('styles','StylesController');
 	Route::resource('intromsg','IntromsgController');
 	Route::resource('popup','PopupController');
 	Route::resource('header','HeaderController');
 	Route::resource('notfound','NotFoundPageController');
 	Route::resource('script','ScriptsController');

 	Route::get('/customOptions',function(){return view('admin.customOptions');});
 	Route::get('/index',function(){return view('admin.index');});*/

    /*	Route::get('/contentPages',function(){return view('admin.contentPages');});

        Route::get('/contentPagesEdit',function(){return view('admin.contentPagesEdit');});

        Route::get('/header',function(){return view('admin.header');});

        Route::get('/login',function(){return view('admin.login');});
        Route::get('/opningLetter',function(){return view('admin.opningLetter');});


        Route::get('/stylesOptions',function(){return view('admin.stylesOptions');});
        Route::get('/viewTexts',function(){return view('admin.viewTexts');});
        Route::get('/viewTextsEdit',function(){return view('admin.viewTextsEdit');});

    */
});








//php artisan vendor:publish --provider="Spatie\Analytics\AnalyticsServiceProvider"
//php artisan vendor:publish --provider="Edujugon\GoogleAds\Providers\GoogleAdsServiceProvider" --tag="config"
