<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate();

        Cgy::factory()->times(100)->create();

        // $loop =20;
        // for ($i=0; $i <$loop ; $i++) {
        //   $values = array();
        //   Cgy::create([
        //     'subject'=>$faker->sentence,'enabled'=>$faker->randomElement([true,false]) ,'sort'=>$values []= $faker->unique()->randomnumber,
        //     'pic'=>'https://images.unsplash.com/photo-'.$i.'?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
        //     'desc'=>$i,
        //     'enabled_at'=>Carbon::now()->addDay(rand(0,10))

        //   ]);

        // }
    }
}
