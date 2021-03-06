<?php

namespace App\Http\Controllers;

use App\Slider;
use App\ViewModels\AdminSliderViewModel;
use App\ViewModels\SliderViewModel;
use Illuminate\Http\Request;

class AdminSliderController extends LayoutController
{
    public function addSliderForm()
    {
        
        return view("admin.adminAddSlider", compact('model'));
    }
    
    
    public function adminSliders(){

        $model = new AdminSliderViewModel('admin.adminSlider');

        $model->slider =  Slider::select([
            'id',
            'title_' . $model->language . ' as title',
            'text_' . $model->language . ' as text',
            'image_slide',
            'created_at'
        ])->orderByDesc('created_at')->get();

        
        return view("admin.adminSlider", compact('model'));
    }

    public function addSlider()
    {
        $title_ru = request('titleSliderRu');
        $title_uk = request('titleSliderUk');
        $text_ru = request('textSliderRu');
        $text_uk = request('textSliderUk');



        $extension = request()->file('slider-img')->getClientOriginalExtension(); // getting image extension
        $dir = 'uploads/slider/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        request()->file('slider-img')->move($dir, $filename);

        $image_path = "/uploads/slider/$filename";


//          \Debugbar::info (request()->file('slider-img'));


        $addslider = new Slider();
        $addslider->title_ru = $title_ru;
        $addslider->title_uk = $title_uk;
        $addslider->text_ru = $text_ru;
        $addslider->text_uk = $text_uk;
        $addslider->image_slide = $image_path;



        $addslider->save();

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function deleteSlide()
    {
        $id = request('id');


        Slider::whereId($id)->delete();

        return response()->json([
            'status' => 'success'
        ]);

    }

    public function showSliderEdit($id){
        $slider = Slider::whereId($id)->first();
        return view('admin.adminEditSlider', compact('slider'));
    }
    
    
    public function editSlide(){
        
        $id = request('slidId');
        $title_ru = request('titleSliderRu');
        $title_uk = request('titleSliderUk');
        $text_ru = request('textSliderRu');
        $text_uk = request('textSliderUk');
        
        $editslide = Slider::whereId($id)->first();

        $editslide->title_ru = $title_ru;
        $editslide->title_uk = $title_uk;
        $editslide->text_ru = $text_ru;
        $editslide->text_uk = $text_uk;

        if (request()->file('sliderImg') || !is_null(request()->file('sliderImg'))){

            $extension = request()->file('sliderImg')->getClientOriginalExtension();
            $dir = 'uploads/slider/';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            request()->file('sliderImg')->move($dir, $filename);
            $image_path = "/uploads/slider/$filename";
            $editslide->image_slide = $image_path;

        }

        $editslide->save();

        return response()->json([
            'status' => 'success'
        ]);
        
    }
}
