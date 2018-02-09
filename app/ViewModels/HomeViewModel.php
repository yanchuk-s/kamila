<?php

namespace App\ViewModels;

class HomeViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 4;
    
    public $offset = 0;
    
    public $homeBlog;
    
    public  $homeResponse;

    public function __construct($language, $view, $page)
    {
        parent::__construct($language, $view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
