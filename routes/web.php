
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('sulav');


Route::get('/about', function () {
    return view('xyz');
})->name('ram');

// Route::get('/search/{name}/{age}', function ($name, $age) {
//     echo $name;
//     echo "<br>";
//     echo $age;
// })->name('sulav');

// /sum/24/25
// Route::get('/sum/{a}/{b}', function ($a, $b) {
//     $sum = $a + $b;
//     echo $sum;
// });


