<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date_create();
        
        DB::table('oauth_clients')->insert([
            'user_id'                => DB::table('users')->first()->id,
            'name'                   => 'Password Grant Client',
            'secret'                 => env('APP_OAUTH_CLIENT_SECRET'),
            'redirect'               => 'http://localhost',
            'personal_access_client' => false,
            'password_client'        => true,
            'revoked'                => false,
            'created_at'             => $now,
            'updated_at'             => $now,
        ]);
    }
}
