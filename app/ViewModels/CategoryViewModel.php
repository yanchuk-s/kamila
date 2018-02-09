<?php

namespace App\ViewModels;

use App\Helpers\Languages;

class CategoryViewModel extends LayoutViewModel
{

    var $categories;

    public function __construct($view, $page)
    {
        parent::__construct(Languages::DEFAULT_LANGUAGE, $view);
        
    }



  
   
}
