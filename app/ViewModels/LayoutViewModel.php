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
    public $view;
    
    public function __construct($view)
    {
        $this->view = $view;
    }
}