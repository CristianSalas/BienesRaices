<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\RealEstateModel;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

    	DB::table('realestate')->delete();
    	$realestates=array(
        	[
        		'originalCost'=>'a', 
        		'newCost'=>'a', 
        		'construction'=>'a', 
        		'district'=>'a',
        		'canton'=>'a',
        		'province'=>'a',
        		'direction'=>'a',
        		'folio'=>'a',
        		'lot'=>'a',
        		'contactName'=>'a',
        		'contactTelephoneNumber'=>'a',
        		'contactEmail'=>'a',
        	]
        );

        foreach ($realestates as $realestate) {
        	RealEstateModel::create($realestate);
        }


        DB::table('users')->delete();
        $users=array(
        	[
                'state'=>'true',
        		'type'=>'0',
        		'name'=>'Cristian',
        		'email'=>'cs.salas94@gmail.com',
        		'password'=> Hash::make('123456789')
        	]
        );

        foreach ($users as $user) {
        	User::create($user);
        }


        //$this->call(UserTableSeeder::class);
        //$this->call(RealStateTableSeeder::class);
    }
}
