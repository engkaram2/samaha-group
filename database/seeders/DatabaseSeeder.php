<?php

namespace Database\Seeders;

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
        $this->call(AdminsTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(LegalSettingsTableSeeder::class);
        $this->call(ServicesSettingsTableSeeder::class);
        $this->call(TranslationSettingsTableSeeder::class);
        $this->call(ShabaanSettingsTableSeeder::class);
        $this->call(JasemSettingsTableSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
