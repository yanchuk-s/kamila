<?php

namespace App\ViewModels;

use App\Helpers\Languages;

class BlogViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 4;
    
    public $offset = 0;
    
    public $blogsTotalCount;

    public $blogs;
    
    public $randomBlogs;
    
    public $categoryes;
    
    public $blog;

    public $homeBlog;
    
    public $category;

    public function __construct($language, $view, $page)
    {
        parent::__construct($language, $view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
