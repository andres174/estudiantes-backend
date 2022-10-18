<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeGrade;

class TypeGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeGrade::create([
            'type_grade' => "Nota 1",
            'state' => 1
        ]);
        TypeGrade::create([
            'type_grade' => "Nota 2",
            'state' => 1
        ]);
        TypeGrade::create([
            'type_grade' => "Nota 3",
            'state' => 1
        ]);
        TypeGrade::create([
            'type_grade' => "Nota 4",
            'state' => 1
        ]);
        TypeGrade::create([
            'type_grade' => "Promedio",
            'state' => 1
        ]);
    }
}
