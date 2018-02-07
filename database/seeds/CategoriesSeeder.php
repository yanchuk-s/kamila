<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $this->seed();
        DB::commit();
    }

    public function seed()
    {
        for ($i = 1; $i <= 5; $i++)
        {
            $category = new Category();
            $category->name = "Category $i";
            $category->slug = "category-$i";
            $category->save();
        }
    }
}
