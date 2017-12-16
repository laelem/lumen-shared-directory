<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date_create();

        DB::table('users')->insert([
            'name'       => 'test',
            'email'      => 'test@gmail.com',
            'password'   => app('hash')->make(env('APP_OAUTH_USER_TEST_PASSWORD')),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
