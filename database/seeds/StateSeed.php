<?php
use App\State;
use Illuminate\Database\Seeder;

class StateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        State::create(
        	
        	['name'=>'Ibadan']);
    }
}
