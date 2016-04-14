<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Models\Painting;

Route::get('/', function ()
{
    /*
    Schema::create('art', function($newtable)
    {
      $newtable->increments('id');
      $newtable->string('artist');
      $newtable->string('title',500);
      $newtable->text('description');
      $newtable->date('created');
      $newtable->date('exhibition_date');
      $newtable->timestamps();
    });

    Schema::table('art', function($newtable)
    {
      $newtable->boolean('alumni');
      $newtable->dropColumn('exhibition_date');
    });
    */
    /*
    $painting = new Painting;
    $painting->title = 'Do no wrong';
    $painting->artist = 'D. DoRight';
    $painting->year = 2014;
    $painting->save();
    */

    $theLandmarks = array('St. Marks', 'Brooklyn Heights', 'Central Park', 'Times Square');
    return view('welcome', array('theLocation' => 'Lisbon', 'theWeather' => 'stormy', 'theLandmarks' => $theLandmarks));
});

Route::get('about', function () {
    return 'About content goes here.';
});

Route::get('about/directions', function () {
    return 'Directions go here.';
});

Route::get('about/{theSubject}', function ($theSubject) {
    return $theSubject.' content goes here.';
});

Route::get('about/classes/{theSubject}', function ($theSubject) {
    return "Content about {$theSubject} classes goes here.";
});
