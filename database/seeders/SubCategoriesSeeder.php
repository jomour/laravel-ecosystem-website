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
            //INFRASTRUCTURE
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
            //CODE ANALYSIS
            [
                'id'=> 4,
                'name' => 'Team Laravel',
                'categories_id' => 2
            ],
            [
                'id'=> 5,
                'name' => 'Product',
                'categories_id' => 2
            ],
            [
                'id'=> 6,
                'name' => 'Package',
                'categories_id' => 2
            ],
            //Dev Kit
            [
                'id'=> 7,
                'name' => 'Team Laravel',
                'categories_id' => 3
            ],
            [
                'id'=> 8,
                'name' => 'Product',
                'categories_id' => 3
            ],
            [
                'id'=> 9,
                'name' => 'Package',
                'categories_id' => 3
            ],
            //Monitoring
            [
                'id'=> 10,
                'name' => 'Team Laravel',
                'categories_id' => 4
            ],
            [
                'id'=> 11,
                'name' => 'Product',
                'categories_id' => 4
            ],
            [
                'id'=> 12,
                'name' => 'Package',
                'categories_id' => 4
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
