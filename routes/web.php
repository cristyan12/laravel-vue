<?php

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('tasks', 'TaskController', [
    'except' => 'show'
]);
