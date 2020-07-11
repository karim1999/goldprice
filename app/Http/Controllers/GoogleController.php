<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelGoogleAds\Services\AdWordsService;
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\CampaignService;
use Google\AdsApi\AdWords\v201806\cm\OrderBy;
use Google\AdsApi\AdWords\v201806\cm\Paging;
use Google\AdsApi\AdWords\v201806\cm\Selector;
use Google_Client;
use Google_Service_Books;

use GetOpt\GetOpt;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentNames;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentParser;
use Google\Ads\GoogleAds\Lib\V2\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V2\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\V2\GoogleAdsException;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\V2\Enums\KeywordMatchTypeEnum\KeywordMatchType;
use Google\Ads\GoogleAds\V2\Errors\GoogleAdsError;
use Google\Ads\GoogleAds\V2\Services\GoogleAdsRow;
use Google\ApiCore\ApiException;
use Google_Service_AdSense;


class GoogleController extends Controller
{


	const CUSTOMER_ID = 'INSERT_CUSTOMER_ID_HERE';
    const PAGE_SIZE = 50;


 

	protected $adWordsService;
    public function __construct(AdWordsService $adWordsService)
    {
        $this->adWordsService = $adWordsService;
    }


   public function index(Request $request){



/*
   	   $options = (new ArgumentParser())->parseCommandArguments([
            ArgumentNames::CUSTOMER_ID => GetOpt::REQUIRED_ARGUMENT
        ]);

     $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();
*/


   	$client = new Google_Client();
   	$client->setAuthConfig(app_path('adsence/adsence_file.json'));
   	//return var_dump($client);

   	$client->setClientId('833360923723-8b30lkd1u6n8pfjcgbp2li6iq8043o0k.apps.googleusercontent.com');

   	$client->setApplicationName("rkmy");
	$client->setDeveloperKey("AIzaSyCcmfHQMrCBUpcqffbSUynGT_nFgfOCfmQ");

	
	 $client->setScopes(Google_Service_AdSense::ADSENSE);
	 return var_dump($client);
	//return var_dump($this->adWordsService);

	 $accounts = new GetAllAccounts();
	$adss=new Google_Service_AdSense($client);
	return var_dump($adss);//json_encode($adss->accounts_reports);


	$service = new Google_Service_Books($client);
	$optParams = array('filter' => 'free-ebooks');
	$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

	foreach ($results as $item) {
	  echo $item['volumeInfo']['title'], "<br /> \n";
	}
 
 



   }





}
