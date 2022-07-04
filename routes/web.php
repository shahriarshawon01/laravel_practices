<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Simple Route | Route Returning String
Route::get('uri', function () {
    return 'Hi Route';
});
// Route single parameters
Route::get('post/{post_id}', function ($post) {
    return "Route single parameters : " . $post;
});
// Route multiple parameters
Route::get('post/{post_id}/comment/{comment_id?}', function ($p_id, $c_id = 10001) {
    return "Route multiple parameters : " . '</br>' . 'Post ID: ' . $p_id . '</br>' .
        'Comment ID: ' . $c_id;
});
// Route Parameters & Reguler Expression
Route::get('reguler_expression/{p_para}', function ($para) {
    return $para;
})->where('p_para', '[0-9]+');
// Routes redirect
Route::redirect('/here', '/there');
// Fallback Route
Route::fallback(function () {
    return "Fallback Route :)";
});
