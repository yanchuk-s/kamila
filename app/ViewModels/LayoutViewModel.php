<?php
/**
 * Created by PhpStorm.
 * User: Yanchuk Serhiy
 * Date: 30.01.2018
 * Time: 10:26
 */

namespace App\ViewModels;


abstract class LayoutViewModel
{
    public $language;
    
    public $view;
    
    public $metaTitle;

    public $metaDescription;
    
    public function __construct($language, $view)
    {
        $this->language = $language;
        $this->view = $view;
    }
}