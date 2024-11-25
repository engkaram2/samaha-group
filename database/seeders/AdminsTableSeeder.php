<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => 1,
            'name_ar' => 'legal1',
            'name_en' => 'legal1',
            'email' => 'admin@legal1.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'legal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 2,
            'name_ar' => 'legal2',
            'name_en' => 'legal2',
            'email' => 'admin@legal2.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'legal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('admins')->insert([
            'id' => 3,
            'name_ar' => 'translation1',
            'name_en' => 'translation1',
            'email' => 'admin@translation1.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'translation',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 4,
            'name_ar' => 'translation2',
            'name_en' => 'translation2',
            'email' => 'admin@translation2.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'translation',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        DB::table('admins')->insert([
            'id' => 5,
            'name_ar' => 'services1',
            'name_en' => 'services1',
            'email' => 'admin@services1.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'services',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 6,
            'name_ar' => 'services2',
            'name_en' => 'services2',
            'email' => 'admin@services2.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'services',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('admins')->insert([
            'id' => 7,
            'name_ar' => 'jasem1',
            'name_en' => 'jasem1',
            'email' => 'admin@jasem1.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'jasem',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 8,
            'name_ar' => 'jasem2',
            'name_en' => 'jasem2',
            'email' => 'admin@jasem2.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'jasem',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('admins')->insert([
            'id' => 9,
            'name_ar' => 'shaaban1',
            'name_en' => 'shaaban1',
            'email' => 'admin@shaaban1.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'shaaban',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 10,
            'name_ar' => 'shaaban2',
            'name_en' => 'shaaban2',
            'email' => 'admin@shaaban2.com',
            'password' => bcrypt('123456'),
            'mobile' => '123456789',
            'type'=>'shaaban',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
