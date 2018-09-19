<?php


Route::get('/', 'QuoteController@home');

Route::get('/{person_slug}', 'QuoteController@person');

Route::get('/{quote_id}/', 'QuoteController@quote_single');