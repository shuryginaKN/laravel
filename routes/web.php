<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Задание 9.1
Route::get('/user/{id?}', function ($id = 0) {
    return "Передан параметр $id";
});

//Задание 9.2
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    $week = [1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда',
    4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 0 => 'Воскресение'];
    $day_week = date('w', mktime(0, 0, 0, $month, $day, $year));
    return "<p>День недели $day.$month.$year - $week[$day_week]";
})->where([
    'year' => '^(19|20)\d{2}$',
    'month' => '^(0?[0-9]|1[012])$',
    'day' => '^(0[1-9]|[1-2][0-9]|3[0-1])$'
]);

//Задание 9.3
Route::get('names/{name}', function($name) {
    $users = [ 
        'user1' => 'city1', 
        'user2' => 'city2', 
        'user3' => 'city3', 
        'user4' => 'city4', 
        'user5' => 'city5'
    ];
    
    if (array_key_exists($name, $users)) {
        return $users[$name];
    } else {
        return "Вы ввели неверное имя";
    }
});

//Задание 9.4
Route::get('/pages/show/{id}', [PageController::class, 'showOne']);
Route::get('/pages/all', [PageController::class, 'showAll']);