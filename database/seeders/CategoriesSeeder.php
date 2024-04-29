<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                "id" => 1,
                "name" => "Infrastructure"
            ],
            [
                "id" => 2,
                "name" => "Code Analysis"
            ],
            [
                "id" => 3,
                "name" => "Dev Kit"
            ],
            [
                "id" => 4,
                "name" => "Monitoring"
            ]
        ];
       
        foreach($categories as $category){
            Categories::updateOrCreate(
                ['id' => $category['id']],
                $category
            );
        }
    }
}
