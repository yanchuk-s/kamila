<?php

use App\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
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
        for ($i = 1; $i <= 20; $i++)
        {
            $blog = new Blog();
            $blog->title_ru = "ruTITLE $i";
            $blog->title_uk = "ukTITLE $i";
            $blog->category_id = rand(1, 5);
            $blog->slug = "title-$i";
            $blog->description_ru = "ruTEXT $i";
            $blog->description_uk = "ukTEXT $i";
            $blog->image_path = "/images/recent-news/recent-news-1.jpg";
            $blog->save();   
        }
    }
}
