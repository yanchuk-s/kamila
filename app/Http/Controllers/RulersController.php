<?php

namespace App\Http\Controllers;

use App\Helpers\Languages;
use App\Rulers;
use App\ViewModels\RulersViewModel;
use Illuminate\Http\Request;

class RulersController extends LayoutController
{
    public function rulersPage($language = Languages::DEFAULT_LANGUAGE){
        Languages::localizeApp($language);

        $model = new RulersViewModel($language ,'rulers', 1);

        $model->ruler = Rulers::select([
            'id',
            'text_' . $model->language . ' as text',
        ])->first();
        
        return view('rulers', compact('model'));
    }
}
