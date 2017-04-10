<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            [
                'name' => 'general',
            ]
        );

        Category::create(
            [
                'name' => 'java',
            ]
        );

        Category::create(
            [
                'name' => 'cpp',
            ]
        );

        Category::create(
            [
                'name' => 'html',
            ]
        );

        Category::create(
            [
                'name' => 'web',
            ]
        );
    }
}
