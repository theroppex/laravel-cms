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
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'sur-name' => 'admin',
                'email' => 'admin@admin.com',
                'role-id' => 1,
                'password' => bcrypt(env('ADMIN_PASS')),
            ]
        );
    }
}
