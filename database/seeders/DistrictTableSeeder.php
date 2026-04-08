<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    $districts=[
        ['name'=>'ش- الاستاد','city_id'=>1],
        ['name'=>'ش- على مبارك','city_id'=>1],
        ['name'=>'ش- حسان ابن ثابت','city_id'=>1],
        ['name'=>'ش- مصطفى كامل','city_id'=>1],
        ['name'=>'ش- يوسف الصديق  ','city_id'=>1],
        ['name'=>'ش-الجيش','city_id'=>1],
    ];

    foreach ($districts as $district){

        District::create($district);
    }

    }
}
