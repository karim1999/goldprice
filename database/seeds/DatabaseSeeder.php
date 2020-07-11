<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
        $this->call(LanguagesSeeder::class);
        $this->call(CodesSeeder::class);
        $this->call(TextSeeder::class);
        $this->call(SettingsSeeder::class);
        
        
        
    }
}

/*class PagesSeeder extends Seeder
{
 
    public function run()
    {
    	return \App\Page::create([
            'page_name' => 'الرئيسية',
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}

*/

class LanguagesSeeder extends Seeder
{
 
    public function run()
    {
        return \App\Language::create([
            'shortcut_name' => 'AR',
            'rtl' => 'rtl',
            'lang_name' => 'العربية',

        ]);

        // $this->call(UsersTableSeeder::class);
    }
}



class CodesSeeder extends Seeder
{
    public function run()
    {
        return \App\Seo::create([
            'view_id' => '',
            'verification_google_code' => '',
            'analysis_google_code' => '',

        ]);

        // $this->call(UsersTableSeeder::class);
    }
}



class TextSeeder extends Seeder
{
 
    public function run()
    {
 
        return \App\Text::create([
            'language_id' => '1',
            'theme_title' => 'الوضع',
            'annonce_title' => 'الاعلان',
            'goldprice_title' => 'اسعار الذهب',
            'silverprice_title' => 'اسعار الفضة',
            'latestnews_title' => 'آخر الاخبار',
            'supportedcountries_title' => 'الدول المدعومة',
            'rkmyfooter_title' => 'هذا الموقع مدار بواسطة شركة رقمي للإعلام',
            'privacytittle_title' => 'سياسة الخصوصية',
            'privacy_title' => 'سياسة الخصوصية محتوي ',
            'termstittle_title' => 'شروط الاستخدام',
            'terms_title' => 'شروط الاستخدام محتوي',
            'notes' => 'ملاحظات',
        

        ]);

        // $this->call(UsersTableSeeder::class);
    }
}




class SettingsSeeder extends Seeder
{
    public function run()
    {
 
         \App\Setting::create([
            'language_id' => '1',
            'type' => 'script',
            'title' => '',
            'status' => '',
            'html' => '',
            'css' => '',
            'js' => '',


        ]);

         \App\Setting::create([
            'language_id' => '1',
            'type' => 'footer',
            'title' => '',
            'status' => '',
            'html' => '',
            'css' => '',
            'js' => '',
        ]);

         \App\Setting::create([
            'language_id' => '1',
            'type' => 'popup',
            'title' => '',
            'status' => '',
            'html' => '',
            'css' => '',
            'js' => '',
        ]);

          \App\Setting::create([
            'language_id' => '1',
            'type' => 'notfound',
            'title' => '',
            'status' => '',
            'html' => '',
            'css' => '',
            'js' => '',
        ]);

          \App\Setting::create([
            'language_id' => '1',
            'type' => 'intromsg',
            'title' => '',
            'status' => '',
            'html' => '',
            'css' => '',
            'js' => '',
        ]);


           \App\Setting::create([
            'language_id' => '1',
            'type' => 'pattern',
            'title' => '',
            'status' => '',
            'html' => '',
            'css' => '',
            'js' => '',
        ]);


        \App\Setting::create([
            'language_id' => '1',
            'type' => 'style',
            'title' => '',
            'status' => '',
            'html' => '',
            'css' => '',
            'js' => '',
        ]);
           

         return ;
        // $this->call(UsersTableSeeder::class);
    }
}




