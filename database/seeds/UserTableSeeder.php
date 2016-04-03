<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;
use App\Post as Post;

class UserAndPostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
        	'name'  => 'Hemraj Solanki',
        	'email' => 'test@vamaship.com',
        	'password' => Hash::make( '123456' )
        	]);

        Post::create([
        	'article_name'  => 'Vamaship',
        	'article_discription' => 'SHIP VIA AIR INDIA TO 200 COUNTRIES!....SHIP VIA OCEAN
CHEAPEST FCL AND LCL PRICES!......SHIP VIA TRUCK QUICKEST TURNAROUND TIME!',
        	]);
    }

}