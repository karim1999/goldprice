<?php

namespace App\Http\Middleware;

use Closure;

class SetLangAndPrice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

    
        if(null === session('currency') || null === session('country')){ 
            $location = geoip($ip = $_SERVER['REMOTE_ADDR']);
            $is_set_cur=\App\Currency::where('value',$location->currency)->get()->count();
            $is_set_cou=\App\Country::where('value',$location->currency)->get()->count();
            if(null !== $is_set_cur && $is_set_cur >0 && null !== $is_set_cou && $is_set_cou > 0)
            session([
                'currency' => $location->currency,
                'country' => $location->currency, 
            ]);  
            else
            session([
                'currency' => 'USD',
                'country' => 'USD', 
            ]);  
        } 

        
        if(null === session('site_type'))
        {
            session(['site_type'=>env('DEFAULT_SITE')]);
        }

        if(null === session('site_lang'))
        {
            session(['site_lang'=>env('DEFAULT_LANGUAGE')]);
        }



        /*if(session(''))
        {
            session(['mode'=>'dark']);
            return $next($request);
        }*/
        return $next($request);
    }
}
