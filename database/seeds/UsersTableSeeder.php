<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Luigi Battaglioli',
            'email' => 'luigi@fundamentalshape.com',
            'password' => bcrypt('snickers123'),
            'phone' => '5188013736',
        ]);

        DB::table('properties')->insert([
            'user_id' => 1,
            'name' => 'The Fundamental Shape',
            'domain' => 'fundamentalshape.com'
        ]);

        DB::table('bills')->insert([
            'property_id' => 1,
            'title' => 'Built you a blog.',
            'description' => 'We used Statamic to build you a blog. Login to your-domain.com/cp',
            'price' => 100000,
            'paid_at' => null
        ]);

        DB::table('bills')->insert([
            'property_id' => 1,
            'title' => 'Built you a landing page.',
            'description' => 'We built you a simple HTML landing page to attract new customers to your site.',
            'price' => 150000,
            'paid_at' => null
        ]);

        DB::table('bills')->insert([
            'property_id' => 1,
            'title' => 'Built you a contact page.',
            'description' => 'We built you a contact form for users to contact you on your site.',
            'price' => 150000,
            'paid_at' => \Carbon\Carbon::now()->subDay()
        ]);
    }
}
