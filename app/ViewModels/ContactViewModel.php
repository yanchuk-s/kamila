<?php

namespace App\ViewModels;

use App\Helpers\Languages;

class ContactViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 4;

    public $offset = 0;
    
    public function __construct($language, $view, $page)
    {
        parent::__construct($language, $view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
