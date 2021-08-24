<?php

use Illuminate\Database\Seeder;
use App\Models\Speciality;

class SpecialityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=>'Cardiology',
                'created_at'=> now()
            ],
            [
                'name'=>'Dermatology',
                'created_at'=> now()
            ],
            [
                'name'=>'Gastroenterology',
                'created_at'=> now()
            ],
            [
                'name'=>'Hematology',
                'created_at'=> now()
            ],
            [
                'name'=>'Immunology',
                'created_at'=> now()
            ],
            [
                'name'=>'Infectious Diseases',
                'created_at'=> now()
            ],
            [
                'name'=>'Metabolism',
                'created_at'=> now()
            ],
            [
                'name'=>'Neurology',
                'created_at'=> now()
            ],
            [
                'name'=>'Respirology',
                'created_at'=> now()
            ],
            [
                'name'=>'Substance Abuse',
                'created_at'=> now()
            ],
        ];
        Speciality::insert($data);
        
    }
}
