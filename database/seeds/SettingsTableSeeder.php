<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'laravel blog',
            'address' => 'cairo,Egypt',
            'contact_number' => '011223344',
            'contact_email' => 'info@laravel_blog.com',
        ]);
    }
}
