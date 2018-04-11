<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->text('name')->nullable();
            $table->text('atherAgency')->nullable();
            $table->text('dateOfBirth')->nullable();
            $table->text('age')->nullable();
            $table->text('HomeAddress')->nullable();
            $table->text('phoneNumber')->nullable();
            $table->text('mail')->nullable();
            $table->text('socialNetworks')->nullable();
            $table->text('hight')->nullable();
            $table->text('weight')->nullable();
            $table->text('hairColor')->nullable();
            $table->text('eyeColor')->nullable();
            $table->text('bodyType')->nullable();
            $table->text('familyStatus')->nullable();
            $table->text('children')->nullable();

            $table->text('smoking')->nullable();
            $table->text('alcohol')->nullable();
            $table->text('religion')->nullable();
            $table->text('educationSpeciality')->nullable();
            $table->text('occupation')->nullable();
            $table->text('languages')->nullable();
            $table->text('levelLanguages')->nullable();
            $table->text('internationalPassport')->nullable();
            $table->text('countriesVisited')->nullable();
            $table->text('wantVisit')->nullable();
            $table->text('animals')->nullable();
            $table->text('favoriteSport')->nullable();
            $table->text('favoriteColor')->nullable();

            $table->text('qualitiesYour')->nullable();

            $table->text('favoriteFlowers')->nullable();
            $table->text('favoriteFilms')->nullable();
            $table->text('favoriteMusic')->nullable();
            $table->text('cooking')->nullable();
            $table->text('freeTime')->nullable();
            $table->text('inchildhood')->nullable();
            $table->text('threeThings')->nullable();
            $table->text('qualitiesLike')->nullable();
            $table->text('anotherCountry')->nullable();
            $table->text('aloneTime')->nullable();
            $table->text('yourDescr')->nullable();

            $table->text('partnerOld')->nullable();
            $table->text('partnerHight')->nullable();
            $table->text('partnerBodyType')->nullable();
            $table->text('partnerChildren')->nullable();
            $table->text('partnerRace')->nullable();
            $table->text('partnerReligion')->nullable();
            $table->text('partnerEducation')->nullable();
            $table->text('partnerHome')->nullable();
            $table->text('partnerDescr')->nullable();

            $table->text('image_path')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
