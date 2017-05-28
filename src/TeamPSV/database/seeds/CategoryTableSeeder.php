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
                'name' => 'cpp',
            ]
        );

        Category::create(
            [
                'name' => 'java',
            ]
        );

        Category::create(
            [
                'name' => 'php',
            ]
        );

        Category::create(
            [
                'name' => 'xml',
            ]
        );

        Category::create(
            [
                'name' => 'js',
            ]
        );

        Category::create(
            [
                'name' => 'nodeJS',
            ]
        );

        Category::create(
            [
                'name' => 'html',
            ]
        );

        Category::create(
            [
                'name' => 'jQuery',
            ]
        );
    }
}
