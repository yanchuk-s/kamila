<?php

namespace App\ViewModels;

use App\Helpers\Languages;

class AdminSliderViewModel extends LayoutViewModel
{


    
    public $slider;
    
    public function __construct($view)
    {
        parent::__construct(Languages::DEFAULT_LANGUAGE, $view);
        
    }
}
