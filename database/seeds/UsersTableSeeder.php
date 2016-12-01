<?php
use App\User;
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
        User::create([
        	'name' => 'Esmidio Rojas Rodriguez',
        	'email'=> 'esmidio@gmail.com',
        	'password'=>bcrypt('neurologia')
        ]);

    }
}
