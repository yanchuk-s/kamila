<?php

namespace App\ViewModels;

use App\Helpers\Languages;

class AdminClientViewModel extends LayoutViewModel
{
    public $page = 1;

    public $limit = 9;
    
    public $offset = 0;
    
    public $clientTotalCount;

    public $clients;
    
    public $client;

    public $haircolors = [
        'Блондинка',
        'Брюнетка',
        'Рыжеволосая',
        'Шатенка',
        'Русая'
    ];

    public $eyecolors = [
        'Карие',
        'Зеленые',
        'Голубые',
        'Шатенка',
        'Серые'
    ];

    public $familyStatus = [
        'Не замужем',
        'Розведена',
        'Вдова',
    ];

    public $smoking = [
        'Да',
        'Нет'
    ];

    public $alcohol = [
        'Да',
        'Нет'
    ];

    public $internationalPassport = [
        'Да',
        'Нет'
    ];





    public function __construct($view, $page)
    {
        parent::__construct(Languages::DEFAULT_LANGUAGE, $view);
        
        $this->page = $page;
        
        $this->offset = ($this->page - 1) * $this->limit;
    }
}
