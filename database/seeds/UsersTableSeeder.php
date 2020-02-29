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
        User::create([
            'name' => 'Kenan Kazim',
            'email' => 'keaglee7@gmail.com',
            'password' => bcrypt('kkk'),
        ]);
    }
}
