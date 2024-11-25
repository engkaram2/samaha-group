<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegalSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('legal_settings')->insert([

            ['key' => 'project_name_ar', 'value' => 'موقع وتطبيق سماحة', 'created_at' => now(), ],
            ['key' => 'project_name_en', 'value' => 'Samaha Website & App', 'created_at' => now(), ],


            ['key' => 'mobile', 'value' => '123456789', 'created_at' => now(), ],
            ['key' => 'email', 'value' => 'Samaha@hr.com.uae', 'created_at' => now(), ],
            ['key' => 'fax', 'value' => '9661111111', 'created_at' => now(), ],
            ['key' => 'address', 'value' => 'egypt', 'created_at' => now(), ],
            ['key' => 'latitude', 'value' => '24.71339576110806', 'created_at' => now(), ],
            ['key' => 'longitude', 'value' => '46.67563901275389', 'created_at' => now(), ],



            //social
            ['key' => 'facebook_url', 'value' => 'https://www.facebook.com/', 'created_at' => now(), ],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/', 'created_at' => now(), ],
            ['key' => 'youtube_url', 'value' => 'https://www.youtube.com/', 'created_at' => now(), ],
//            ['key' => 'instagram_url', 'value' => 'https://www.instagram.com/', 'created_at' => now(), ],
            ['key' => 'linked_in_url', 'value' => 'https://www.linkedin.com/', 'created_at' => now(), ],
            ['key' => 'whatsapp_phone', 'value' => '1123456789', 'created_at' => now(), ],


            // general
            ['key' => 'about_app_ar', 'value' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.', 'created_at' => now(), ],
            ['key' => 'about_app_en', 'value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do not look even slightly believable.', 'created_at' => now(), ],

            ['key' => 'conditions_terms_ar', 'value' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.', 'created_at' => now(), ],
            ['key' => 'conditions_terms_en', 'value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do not look even slightly believable.', 'created_at' => now(), ],

            ['key' => 'privacy_ar', 'value' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.', 'created_at' => now(), ],
            ['key' => 'privacy_en', 'value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do not look even slightly believable.', 'created_at' => now(), ],

            ['key' => 'quote_ar', 'value' => 'لوحة تحكم موقع وتطبيق ', 'created_at' => now(), ],
            ['key' => 'quote_en', 'value' => 'سماحة Dashboard', 'created_at' => now(), ],

            ['key' => 'app_description_ar', 'value' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء', 'created_at' => now(), ],
            ['key' => 'app_description_en', 'value' => 'موقع وتطبيق Samaha', 'created_at' => now(), ],


        ]);

    }
}
