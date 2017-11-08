<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO: make this call to UserTableSeeder class work
        $this->call(UsersTableSeeder::class);
        //factory(App\User::class, 50)->create();
    }
}
