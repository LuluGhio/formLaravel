<?php

// Accéder à la la page principale
Route::get('/', 'IndexController@index');

// Accéder au form
Route::get('form', 'UsersController@getInfos');
// Envoyer le form
Route::post('form', 'UsersController@postInfos');

// Accéder au formulaire
Route::get('contact', 'ContactController@getForm');
// Soumettre le formulaire
Route::post('contact', 'ContactController@postForm');