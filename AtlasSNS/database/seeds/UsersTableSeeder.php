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
        // 開発用ユーザーを定義
            DB::table('users')->insert([
                'username' => 'atlas',
                'mail' => 'aaaaa@gmail.com',
                'password' => Hash::make('11111'),
            ]);
    }
}
