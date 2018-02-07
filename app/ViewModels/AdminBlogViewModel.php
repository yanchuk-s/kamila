<?php

namespace App\ViewModels;

class AdminBlogViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 10;
    
    public $offset = 0;
    
    public $blogsTotalCount;

    public $blogs;
    
    public $blog;
    

    public function __construct($view, $page)
    {
        parent::__construct($view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
