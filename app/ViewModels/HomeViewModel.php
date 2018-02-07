<?php

namespace App\ViewModels;

class HomeViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 4;
    
    public $offset = 0;
    
    public $homeBlog;
    
    public  $homeResponse;

    public function __construct($view, $page)
    {
        parent::__construct($view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
