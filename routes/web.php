<?php


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/quest', 'QuestController@index');

// Inventario
    // equip & unequip items
    Route::post('/character/equip-item', 'UserController@equipItem');
    Route::post('/character/unequip-item', 'UserController@unEquipItem');