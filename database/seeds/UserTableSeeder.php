<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['usuario' => 'admin', 'password' => Hash::make('admin'), 'id_persona' => '1']
        ];

        DB::table('users')->insert($users);
    }
}
