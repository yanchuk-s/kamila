<?php

namespace App\ViewModels;

class AdminResponseViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 2;
    
    public $offset = 0;
    
    public $responseTotalCount;

    public $response;
    
    public $randomResponses;
    
    public function __construct($view, $page)
    {
        parent::__construct($view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
