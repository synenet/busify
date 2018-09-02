<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	"name" => "admin",
        	"email" => "admin@busify.com",
        	"password" => Hash::make('admin')

        	]);
    }
}

