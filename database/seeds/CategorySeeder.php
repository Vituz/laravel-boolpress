<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Nature', 'Tech', 'Food', 'Animal'];

        foreach ($categories as $category) {
            $cat = new Category();

            $cat->name = $category;
            $cat->slug = Str::slug($cat->name);
            $cat->save();
        }
    }
}
