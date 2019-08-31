<?php

Route::apiResource('/emails', 'EmailsController');

Route::apiResource('/insereUrls', 'UrlsController');

Route::get('/listarEmails10', 'EmailsController@show10Last');

Route::get('/totalUrlsColetadas', 'UrlsController@totalUrlsColetadas');

Route::get('/totalUrlsVisitadas', 'UrlsController@totalUrlsVisitadas');