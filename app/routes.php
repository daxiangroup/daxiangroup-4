<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as'=>'home', function()
{
	return View::make('home.index');
}));

Route::get('/contact/{type?}', array('as'=>'contact', function($type = '') {
    return View::make('home.contact')
        ->with('active_page', 'contact')
        ->with('type', ucfirst($type));
}));
    Route::post('/contact', array('as'=>'contact.submit', function() {
        die('submitting contact');
    }));

Route::get('/output', array('as'=>'output', function() {
    return View::make('home.output')
        ->with('active_page', 'output');
}));
    Route::get('/output/vivid-voice', array('as'=>'output.vividvoice', function() {
        return View::make('home.output-vividvoice')
        ->with('active_page', 'output');
    }));

Route::get('/services', array('as'=>'services', function() {
    return View::make('home.services')
        ->with('active_page', 'services');
}));

Route::get('/about', array('as'=>'about', function() {
    return View::make('home.about')
        ->with('active_page', 'about');
}));

Route::get('/terms', array('as'=>'terms', function() {
    return View::make('home.terms')
        ->with('active_page', 'terms');
}));

Route::get('/conditions', array('as'=>'conditions', function() {
    return View::make('home.conditions')
        ->with('active_page', 'conditions');
}));