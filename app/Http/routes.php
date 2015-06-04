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

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



/*Route::get('github/authorize', function() {
    return OAuth::authorize('github');
});*/

/*Route::get('github/login', function() {

OAuth::login('github');
return "Done";
    
});*/

use \AdamWathan\EloquentOAuth\Exceptions\ApplicationRejectedException;
use \AdamWathan\EloquentOAuth\Exceptions\InvalidAuthorizationCodeException;
use Illuminate\Database\Eloquent\ModelNotFoundException;



Route::get('{provider}/authorize', function($provider) {
    return  OAuth::authorize($provider);
});

Route::get('{provider}/login', function($provider) {
    try {
        OAuth::login($provider, function($user,$userDetails) {

                $user->email = $userDetails->email;
                $user->name = $userDetails->nickname;
                $user->save();

              //dd($userDetails);


         });



    } catch (ApplicationRejectedException $e) {
        return "User rejected application";
    } catch (InvalidAuthorizationCodeException $e) {
        return "Authorization was attempted with invalid";
        // code,likely forgery attempt
    }

    // Current user is now available via Auth facade
	//return "Done";
    //$user = Auth::user();

    return Redirect::intended('home');
});

/*Route::get('linkedin/authorize', function() {
    return OAuth::authorize('linkedin');
});

Route::get('linkedin/login', function() {
    try {
        OAuth::login('linkedin');
    } catch (ApplicationRejectedException $e) {
        return "User rejected application";
    } catch (InvalidAuthorizationCodeException $e) {
        return "Authorization was attempted with invalid";
        // code,likely forgery attempt
    }

    // Current user is now available via Auth facade
    return "LinkedIn Done";
    //$user = Auth::user();

    //return Redirect::intended();
});

Route::get('facebook/authorize', function() {
    return OAuth::authorize('facebook');
});

Route::get('facebook/login', function() {
    try {
        OAuth::login('facebook');
    } catch (ApplicationRejectedException $e) {
        return "User rejected application";
    } catch (InvalidAuthorizationCodeException $e) {
        return "Authorization was attempted with invalid";
        // code,likely forgery attempt
    }

    // Current user is now available via Auth facade
    return "Facebook Done";
    //$user = Auth::user();

    //return Redirect::intended();
});

Route::get('google/authorize', function() {
    return OAuth::authorize('google');
});

Route::get('google/login', function() {
    try {
        OAuth::login('google');
    } catch (ApplicationRejectedException $e) {
        return "User rejected application";
    } catch (InvalidAuthorizationCodeException $e) {
        return "Authorization was attempted with invalid";
        // code,likely forgery attempt
    }

    // Current user is now available via Auth facade
    return "google Done";
    //$user = Auth::user();

    //return Redirect::intended();
});


Route::get('socialite/github/authorize', function() {

    return Socialize::with('github')->redirect();
});

Route::get('github1/login', function() {

    $user = Socialize::with('github')->user();
    return "socialite github Done ::".$user->token;

});

Route::get('socialite/twitter/authorize', function() {

    return Socialize::with('twitter')->redirect();
});

Route::get('twitter/login', function() {

    $user = Socialize::with('twitter')->user();
    return "socialite twitter Done ::".$user->token;

});

*/


