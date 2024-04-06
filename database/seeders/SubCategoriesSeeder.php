<?php

namespace Database\Seeders;

use App\Models\SubCategories;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategories = [
            [
                'id'=> 1,
                'name' => 'Team Laravel',
                'categories_id' => 1
            ],
            [
                'id'=> 2,
                'name' => 'Product',
                'categories_id' => 1
            ],
            [
                'id'=> 3,
                'name' => 'Package',
                'categories_id' => 1
            ],
            [
                'id'=> 1,
                'name' => 'Team Laravel',
                'categories_id' => 2
            ],
            [
                'id'=> 2,
                'name' => 'Product',
                'categories_id' => 2
            ],
            [
                'id'=> 3,
                'name' => 'Package',
                'categories_id' => 2
            ]
        ];

        foreach($subCategories as $subCategory){
            SubCategories::updateOrCreate(
                ['id' => $subCategory['id']],
                $subCategory
            );
        }
    }
}
