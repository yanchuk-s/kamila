<?php

namespace App\ViewModels;

use App\Helpers\Languages;

class AdminRulersViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 4;
    
    public $offset = 0;

    public  $ruler;

    public  $rulers;
    public function __construct($view, $page)
    {
        parent::__construct(Languages::DEFAULT_LANGUAGE, $view);

        $this->page = $page;

        $this->offset = ($this->page - 1) * $this->limit;
    }
}
