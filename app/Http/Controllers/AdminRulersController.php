<?php

namespace App\Http\Controllers;

use App\Helpers\Languages;
use App\Rulers;
use App\ViewModels\AdminRulersViewModel;
use Illuminate\Http\Request;

class AdminRulersController extends LayoutController
{
    public function showRulers(){
        
        $rulers = Rulers::first();

        return view('admin.adminRulers', compact('rulers'));
        
    }

    public function editRulers(){
        $id = request('id');
        $text_ru =request('textRu');
        $text_uk =request('textUk');

        $editrulers = Rulers::whereId($id)->first();

        $editrulers->text_ru = $text_ru;
        $editrulers->text_uk = $text_uk;

        $editrulers->save();

        return response()->json([
            'status' => 'success'
        ]);
    }
}
