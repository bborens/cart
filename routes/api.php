<?php

Route::get('/', function () {
    $categories = Category::parents()->ordered()->get();

    //
});
