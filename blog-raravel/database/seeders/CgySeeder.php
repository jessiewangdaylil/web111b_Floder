<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Carbon\Carbon;
$timezone = 'Asia/Taipei';
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        for ($i=0; $i <50 ; $i++) {
          Cgy::create([
            'subject'=>'分類'.$i,'enabled'=>true ,'sort'=>$i,
            'pic'=>'https://images.unsplash.com/photo-'.$i.'?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
            'desc'=>$i,
            // 'selled_at' => Carbon::create(2022, $month, $day, $hour, $minute, $second, $timezone);
            'created_at'=>Carbon::now(),
            'updated_at'=>
            Carbon::now()
          ]);

        }
    }
}
