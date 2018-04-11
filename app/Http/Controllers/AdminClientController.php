<?php

namespace App\Http\Controllers;

use App\Client;
use App\Helpers\Languages;
use App\ViewModels\AdminClientViewModel;
use Carbon\Carbon;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Symfony\Component\VarDumper\Cloner\Data;

class AdminClientController extends LayoutController
{

    public function showClients(){

        $model = new AdminClientViewModel('admin.admin-client', 1);

        $model->clients = Client::select([
            'id',
            'name',
            'age',
            'image_path',
            'updated_at',])->
        limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->clientTotalCount = Client::count();

        return view("admin.admin-client", compact('model'));
    }

    public function indexPagination($page = 1)
    {
        $model = new AdminClientViewModel('admin.admin-client', $page);

        $model->clients = Client::select([
            'id',
            'name',
            'age',
            'image_path',
            'updated_at',])->
        limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->clientTotalCount = Client::count();

        return view("admin.admin-client", compact('model'));
    }
    

    public function addClientForm(){

        $model = new AdminClientViewModel('admin-add-client', 1);
        
        return view("admin.admin-add-client", compact('model'));
    }

    public function addClient()
    {

        $name = request('name');
        $dateOfBirth = request('dateOfBirth');
        $age = request('age');
        $HomeAddress = request('HomeAddress');
        $phoneNumber = request('phoneNumber');
        $mail = request('mail');
        $socialNetworks = request('socialNetworks');
        $hight = request('hight');
        $weight = request('weight');
        $hairColor = request('hairColor');
        $eyeColor = request('eyeColor');
        $bodyType = request('bodyType');
        $familyStatus = request('familyStatus');
        $children = request('children');
        $smoking = request('smoking');
        $alcohol = request('alcohol');
        $religion = request('religion');
        $educationSpeciality = request('educationSpeciality');
        $occupation = request('occupation');
        $languages = request('languages');
        $levelLanguages = request('levelLanguages');
        $internationalPassport = request('internationalPassport');
        $countriesVisited = request('countriesVisited');
        $wantVisit = request('wantVisit');
        $animals = request('animals');
        $favoriteSport = request('favoriteSport');
        $favoriteColor = request('favoriteColor');
        $favoriteFlowers = request('favoriteFlowers');
        $favoriteFilms = request('favoriteFilms');
        $favoriteMusic = request('favoriteMusic');
        $cooking = request('cooking');
        $freeTime = request('freeTime');
        $inchildhood = request('inchildhood');
        $threeThings = request('threeThings');
        $qualitiesLike = request('qualitiesLike');
        $qualitiesYour = request('qualitiesYour');
        $anotherCountry = request('anotherCountry');
        $aloneTime = request('aloneTime');
        $yourDescr = request('yourDescr');
        
        $partnerOld = request('partnerOld');
        $partnerHight = request('partnerHight');
        $partnerBodyType = request('partnerBodyType');
        $partnerChildren = request('partnerChildren');
        $partnerRace = request('partnerRace');
        $partnerReligion = request('partnerReligion');
        $partnerEducation = request('partnerEducation');
        $partnerHome = request('partnerHome');
        $partnerDescr = request('partnerDescr');

        $atherAgency = request('atherAgency');

//        $image_path = request('image_path');

        $extension = request()->file('client-img')->getClientOriginalExtension(); // getting image extension
        $dir = 'uploads/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        request()->file('client-img')->move($dir, $filename);

        $image_path = "/uploads/$filename";

        \Debugbar::info(request()->all());

        $addClient = new Client();
        
        $addClient->image_path = $image_path;
        
        $addClient->name = $name;
        $addClient->atherAgency = $atherAgency;
        $addClient->dateOfBirth = $dateOfBirth;
        $addClient->age = $age;
        $addClient->HomeAddress = $HomeAddress;
        $addClient->phoneNumber = $phoneNumber;
        $addClient->mail = $mail;
        $addClient->socialNetworks = $socialNetworks;
        $addClient->hight = $hight;
        $addClient->weight = $weight;
        $addClient->hairColor = $hairColor;
        $addClient->eyeColor = $eyeColor;
        $addClient->bodyType = $bodyType;
        $addClient->familyStatus = $familyStatus;
        $addClient->children = $children;
        $addClient->smoking = $smoking;
        $addClient->alcohol = $alcohol;
        $addClient->religion = $religion;
        $addClient->educationSpeciality = $educationSpeciality;
        $addClient->occupation = $occupation;
        $addClient->languages = $languages;
        $addClient->levelLanguages = $levelLanguages;
        $addClient->internationalPassport = $internationalPassport;
        $addClient->countriesVisited = $countriesVisited;
        $addClient->wantVisit = $wantVisit;
        $addClient->animals = $animals;
        $addClient->favoriteSport = $favoriteSport;
        $addClient->favoriteColor = $favoriteColor;
        $addClient->favoriteFlowers = $favoriteFlowers;
        $addClient->favoriteFilms = $favoriteFilms;
        $addClient->favoriteMusic = $favoriteMusic;
        $addClient->cooking = $cooking;
        $addClient->freeTime = $freeTime;
        $addClient->inchildhood = $inchildhood;
        $addClient->threeThings = $threeThings;
        $addClient->qualitiesLike = $qualitiesLike;
        $addClient->qualitiesYour = $qualitiesYour;
        $addClient->anotherCountry = $anotherCountry;
        $addClient->aloneTime = $aloneTime;
        $addClient->yourDescr = $yourDescr;

        
        $addClient->partnerOld = $partnerOld;
        $addClient->partnerHight = $partnerHight;
        $addClient->partnerBodyType = $partnerBodyType;
        $addClient->partnerChildren = $partnerChildren;
        $addClient->partnerRace = $partnerRace;
        $addClient->partnerReligion = $partnerReligion;
        $addClient->partnerEducation = $partnerEducation;
        $addClient->partnerHome = $partnerHome;
        $addClient->partnerDescr = $partnerDescr;
        

        $addClient->save();

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function clientIndex($id){
        
        $model = new AdminClientViewModel('admin.client-page', 1);


        $model->client = Client::whereId($id)->first();

        
        return view("admin.client-page", compact('model'));
    }
    
    
    

    public function deleteClient()
    {
        $id = request('id');


        Client::whereId($id)->delete();

        return response()->json([
            'status' => 'success'
        ]);

    }
    
    
    
    public function showClientEdit($id){

        $model = new AdminClientViewModel('admin.admin-edit-client', 1);

        $model->client = Client::whereId($id)->first();
        return view('admin.admin-edit-client', compact('model'));
    }



    public function editClient()
    {

        $clientId = request('clientId');
        $name = request('name');
        $dateOfBirth = request('dateOfBirth');
        $age = request('age');
        $HomeAddress = request('HomeAddress');
        $phoneNumber = request('phoneNumber');
        $mail = request('mail');
        $socialNetworks = request('socialNetworks');
        $hight = request('hight');
        $weight = request('weight');
        $hairColor = request('hairColor');
        $eyeColor = request('eyeColor');
        $bodyType = request('bodyType');
        $familyStatus = request('familyStatus');
        $children = request('children');
        $smoking = request('smoking');
        $alcohol = request('alcohol');
        $religion = request('religion');
        $educationSpeciality = request('educationSpeciality');
        $occupation = request('occupation');
        $languages = request('languages');
        $levelLanguages = request('levelLanguages');
        $internationalPassport = request('internationalPassport');
        $countriesVisited = request('countriesVisited');
        $wantVisit = request('wantVisit');
        $animals = request('animals');
        $favoriteSport = request('favoriteSport');
        $favoriteColor = request('favoriteColor');
        $favoriteFlowers = request('favoriteFlowers');
        $favoriteFilms = request('favoriteFilms');
        $favoriteMusic = request('favoriteMusic');
        $cooking = request('cooking');
        $freeTime = request('freeTime');
        $inchildhood = request('inchildhood');
        $threeThings = request('threeThings');
        $qualitiesLike = request('qualitiesLike');
        $qualitiesYour = request('qualitiesYour');
        $anotherCountry = request('anotherCountry');
        $aloneTime = request('aloneTime');
        $yourDescr = request('yourDescr');

        $partnerOld = request('partnerOld');
        $partnerHight = request('partnerHight');
        $partnerBodyType = request('partnerBodyType');
        $partnerChildren = request('partnerChildren');
        $partnerRace = request('partnerRace');
        $partnerReligion = request('partnerReligion');
        $partnerEducation = request('partnerEducation');
        $partnerHome = request('partnerHome');
        $partnerDescr = request('partnerDescr');

        $atherAgency = request('atherAgency');

//        $image_path = request('image_path');

//        $extension = request()->file('client-img')->getClientOriginalExtension(); // getting image extension
//        $dir = 'uploads/';
//        $filename = uniqid() . '_' . time() . '.' . $extension;
//        request()->file('client-img')->move($dir, $filename);
//
//        $image_path = "/uploads/$filename";

        $addClient = Client::whereId($clientId)->first();

        if (request()->file('client-img') || !is_null(request()->file('client-img'))){

            $extension = request()->file('client-img')->getClientOriginalExtension(); // getting image extension
            $dir = 'uploads/';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            request()->file('client-img')->move($dir, $filename);
            $image_path = "/uploads/$filename";
            $addClient->image_path = $image_path;

        }



//        \Debugbar::info(request()->all());

//        $addClient = new Client();


        $addClient->name = $name;
        $addClient->atherAgency = $atherAgency;
        $addClient->dateOfBirth = $dateOfBirth;
        $addClient->age = $age;
        $addClient->HomeAddress = $HomeAddress;
        $addClient->phoneNumber = $phoneNumber;
        $addClient->mail = $mail;
        $addClient->socialNetworks = $socialNetworks;
        $addClient->hight = $hight;
        $addClient->weight = $weight;
        $addClient->hairColor = $hairColor;
        $addClient->eyeColor = $eyeColor;
        $addClient->bodyType = $bodyType;
        $addClient->familyStatus = $familyStatus;
        $addClient->children = $children;
        $addClient->smoking = $smoking;
        $addClient->alcohol = $alcohol;
        $addClient->religion = $religion;
        $addClient->educationSpeciality = $educationSpeciality;
        $addClient->occupation = $occupation;
        $addClient->languages = $languages;
        $addClient->levelLanguages = $levelLanguages;
        $addClient->internationalPassport = $internationalPassport;
        $addClient->countriesVisited = $countriesVisited;
        $addClient->wantVisit = $wantVisit;
        $addClient->animals = $animals;
        $addClient->favoriteSport = $favoriteSport;
        $addClient->favoriteColor = $favoriteColor;
        $addClient->favoriteFlowers = $favoriteFlowers;
        $addClient->favoriteFilms = $favoriteFilms;
        $addClient->favoriteMusic = $favoriteMusic;
        $addClient->cooking = $cooking;
        $addClient->freeTime = $freeTime;
        $addClient->inchildhood = $inchildhood;
        $addClient->threeThings = $threeThings;
        $addClient->qualitiesLike = $qualitiesLike;
        $addClient->qualitiesYour = $qualitiesYour;
        $addClient->anotherCountry = $anotherCountry;
        $addClient->aloneTime = $aloneTime;
        $addClient->yourDescr = $yourDescr;


        $addClient->partnerOld = $partnerOld;
        $addClient->partnerHight = $partnerHight;
        $addClient->partnerBodyType = $partnerBodyType;
        $addClient->partnerChildren = $partnerChildren;
        $addClient->partnerRace = $partnerRace;
        $addClient->partnerReligion = $partnerReligion;
        $addClient->partnerEducation = $partnerEducation;
        $addClient->partnerHome = $partnerHome;
        $addClient->partnerDescr = $partnerDescr;


        $addClient->save();

        return response()->json([
            'status' => 'success'
        ]);
    }


//    public  function editBlog(){
//        $id= request('blogId');
//        $title_ru = request('titleRu');
//        $title_uk = request('titleUk');
//        $description_ru = request('descriptionRu');
//        $description_uk = request('descriptionUk');
//        $category_id = request('categoryId');
//
//        $editBlog = Blog::whereId($id)->first();
//
//        $editBlog->title_ru = $title_ru;
//        $editBlog->title_uk = $title_uk;
//        $editBlog->description_ru = $description_ru;
//        $editBlog->description_uk = $description_uk;
//        $editBlog->category_id = $category_id;
//        $editBlog->slug = str_slug($title_ru);
//
//
//        if (request()->file('blog-img') || !is_null(request()->file('blog-img'))){
//
//            $extension = request()->file('blog-img')->getClientOriginalExtension(); // getting image extension
//            $dir = 'uploads/';
//            $filename = uniqid() . '_' . time() . '.' . $extension;
//            request()->file('blog-img')->move($dir, $filename);
//            $image_path = "/uploads/$filename";
//            $editBlog->image_path = $image_path;
//
//        }
//
//
//        $editBlog->save();
//
//        return response()->json([
//            'status' => 'success'
//        ]);
//    }

//    public function uploadImages()
//    {
//        $imageBase64 = request()->get('image');
//
//        if (!$imageBase64) {
//            return response()->json([
//                'status' => ' 1error'
//            ]);
//        }
//
//        $imageBase64 = stristr($imageBase64, ';base64,', false);
//
//
//        $imageBase64 = substr($imageBase64, strlen(';base64,'));
//        
//        $img = base64_decode($imageBase64);
//     
//
//        $date = date('Y-m-d-H-i-s');
//
//      
//
//        $filename = $date . '.jpg';
//
//    
//
//        $file_img_path = "images/uploads/$filename";
//
//        if ($img!='')
//        {
//            $manager = new ImageManager(array('driver' => 'gd'));
//            try {
//                $manager->make($img)
//                    ->resize(740, null, function ($constraint) { $constraint->aspectRatio(); })
//                    ->save($file_img_path, 50);
//            } catch (\Exception $e) {
//                return response()->json([
//                    'status' => '2error'
//                ]);
//            }
//        }
//
//        return response()->json([
//            'status' => 'success',
//            'url' => '/' . $file_img_path
//
//        ]);
//    }
    
    
}




