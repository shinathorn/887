<?php
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome'); // welcome.blade.php
});

Route::get('/my-route', function () {
    // echo "<h1> My Route Page </h1>";
    // return view('myroute');
    $data = ['head' => 'Multiplication Table'];
    return view('myfolder.mypage', $data);
});

Route::post('/my-route', function (Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view('myroute', $data);
});

Route::post('/my-page', function (Request $req) {
    $req->validate(['back' => 'required|string']);
    $data['back'] = $req->input('back');
    return view('my-route', $data);
});
