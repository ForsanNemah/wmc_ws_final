<?php

use Illuminate\Support\Facades\Route;
 

 
use \Statickidz\GoogleTranslate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('index');
});

 

Route::get('/about', function () {
    return view('about');
});


Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/all_stories', function () {
    return view('all_stories');
});




Route::get('/trans', function () {
    
    $source = 'es';
    $target = 'en';
    $text = 'buenos días';
    
    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);
    
    // Good morning
    echo $result;



   


    

    $source = 'ar';
$target = 'en';
 

$trans = new GoogleTranslate();


 

    

   
    $age = array(

        
        
        "Peter"=>"ذهب", "عاد"=>"", "Joe"=>"ساذج"
    
    
    
    
    
    
    
    
    );



    //print_r( $age);

    foreach($age as $x => $x_value) {

        $value_x_new=$trans->translate($source, $target,$x_value);
        sleep(5);
        echo "'"."$x".";"."=>"."'".$value_x_new."'"."," ;
        echo "<br>";
      }
      
     
});







Route::group([   'middleware' => 'Language'], function () {
	Route::get('/',"\App\Http\Controllers\HomeController@index");
	Route::get('/change-language/{lang}',"\App\Http\Controllers\HomeController@changeLang");
});