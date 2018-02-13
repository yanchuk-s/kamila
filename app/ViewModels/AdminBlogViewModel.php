<?php

namespace App\ViewModels;

use App\Helpers\Languages;

class AdminBlogViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 10;
    
    public $offset = 0;
    
    public $blogsTotalCount;

    public $blogs;
    
    public $blog;
    
    public $categories;
    

    public function __construct($view, $page)
    {
        parent::__construct(Languages::DEFAULT_LANGUAGE, $view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
