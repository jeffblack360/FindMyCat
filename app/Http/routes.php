<?php

use App\Cat;
use App\Breed;
use App\Events\TestEvent;
use App\Http\Middleware\OldMiddleware;

Route::model('cat', 'App\Cat');

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

Route::get('home', function() {
    return View::make('home');
});

Route::get('login', function(){
    return View::make('login');
});

Route::get('contact', function(){
    return View::make('contact');
});

Route::post('login', function(){
    if(Auth::attempt(Input::only('name', 'password'))) {
        return Redirect::intended('/cats');
    } else {
        return Redirect::back()
                ->withInput()
                ->with('error', "Invalid credentials");
    }
});

Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('/cats')
            ->with('message', 'You are now logged out');
});

Route::group(array('before' => 'auth'), function() {
    
    Route::get('cats/create', function() {
        $cat = new Cat;

        return View::make('cats.edit')
            ->with('cat', $cat)
            ->with('method', 'post');
    });

    Route::get('cats/{cat}/edit', function(Cat $cat){
        return View::make('cats.edit')
            ->with('cat', $cat)
            ->with('method', 'put');
    });

    Route::get('cats/{cat}/delete', function(Cat $cat){
        return View::make('cats.edit')
            ->with('cat', $cat)
            ->with('method', 'delete');
    });

    Route::post('cats', function(){
        $cat = Cat::create(Input::all());

        return Redirect::to('cats/'. $cat->id)
                ->with('message', 'Successfully created page!');
    });

    Route::put('cats/{cat}', function(Cat $cat){
        $cat->update(Input::all());

        return Redirect::to('cats/'. $cat->id)
                ->with('message', 'Successfully updated page!');    
    });

    Route::delete('cats/{cat}', function(Cat $cat){
        $cat->delete();

        return Redirect::to('cats')
                ->with('message', 'Successfully delete page!');
    });

    
}); // END Route::group()


Route::get('jq', function() {
    return view('jq');
});


Route::get('json-test', function() {
    $what = Input::get('what');
    $names = [];
    
    function getHTML($names)
    {
        $strResult = '<ul>';
        for($i=0; $i<count($names); $i++)
        {
            $strResult.= '<li>'.$names[$i].'</li>';
        }
        $strResult.= '</ul>';
        return $strResult;
    }
    
    if($what === 'good') 
    {
        $names = array('Sherlock Holmes', 'John Watson','Hercule Poirot', 'Jane Marple');
    }
    else
    {
        $names = array('Professor Moriarty', 'Sebastian Moran', 'Charles Milverton', 'Von Bork', 'Count Sylvius');
    }
    
//    return $names;
    return getHTML($names);
});

Route::get('/', function() {
    
//    Event::fire(new TestEvent("rjb"));
//    return "hello rjb";
//    $headers = ['rjb' => 'alex'];
//    
//    return redirect('about', 301, $headers);
    
        return View::make('home');

});

Route::get('rjb/{age}', ['middleware' => 'App\Http\Middleware\OldMiddleware', function($age) {
    return "rjb -> ". $age;
}]);
    

Route::get('jeff', 'WelcomeController@sendJson');

Route::get('about', function() {
    return View::make('about')->with(['number_of_cats' => 999]); 
});

Route::get('cats', function() {
    $cats = Cat::all();
    
    return View::make('cats.index', compact('cats'));
//        ->with('cats', $cats);
});

Route::get('cats/breeds/{name}', function($name){
    $breed = Breed::whereName($name)->with('cats')->first();
    
    return View::make('cats.index')
        ->with('breed', $breed)
        ->with('cats', $breed->cats);
});

//Route::get('cats/{id}', function($id) {
//    $cat = Cat::find($id);
//    
//    return View::make('cats.single')
//        ->with('cat', $cat);
//});
//
// The following route: cats/{cat} leverages the use of model binding to 
// replace the about route definition: cats/{id}
Route::get('cats/{cat}', function(Cat $cat) {
//    $cat = Cat::find($id);
    
    return View::make('cats.single')
        ->with('cat', $cat);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
