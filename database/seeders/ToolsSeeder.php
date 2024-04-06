<?php

namespace Database\Seeders;

use App\Models\Tools;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tools = [
            [
                'id' => 1,
                'name' => 'Sail',
                'description' => "wrapper docker pour Laravel",
                'imagePath' => '/images/sail.png',
                'websitePath' => 'http://google.fr',
                'githubPath' => 'http://google.fr',
                'sub_categories_id' => 1
            ],
        ];

        foreach($tools as $tool){
            Tools::updateOrCreate(
                ['id' => $tool['id']],
                $tool
            );
        }
    }
}
