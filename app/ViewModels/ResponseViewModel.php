<?php

namespace App\ViewModels;

class ResponseViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 4;
    
    public $offset = 0;
    
    public $responseTotalCount;

    public $response;
    
    public $deleteResponse;
    
    public $randomResponses;
    
    public function __construct($view, $page)
    {
        parent::__construct($view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
