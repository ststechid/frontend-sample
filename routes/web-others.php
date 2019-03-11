<?php

Route::get('/others', 'OthersController@index');

Route::get('/google-map-marker', 'GoogleMapController@withMarker');