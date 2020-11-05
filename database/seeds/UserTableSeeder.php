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
        $param = [
            'name' => 'admin',
            'email' => 'admin@coffee_de_drip',
            'password' => Hash::make('admin'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'admin' => 0,
        ];
        DB::table('users')->insert($param);
    }
}
