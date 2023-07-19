<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProvisionServer;
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
    return view('welcome');
    // return redirect()->route('admin.clientes');
});

// Route::get('/empresa', function () {
//     return view('site/empresa');
// });

Route::view('/empresa', 'site/empresa');

Route::any('/any',function(){
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

Route::match(['get', 'post'],'/match',function(){
    return "Permite apenas acessos definidos nos parâmetros da rota";
});

Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é: ".$id."<br>"."A categoria é: ".$cat;
});

// Route::get('/sobre', function () {
//     return redirect('/empresa');
// });

Route::redirect('/sobre','/empresa');

Route::get('/news',function(){
    return view('news');
})->name('noticias');

Route::get('/novidades',function(){
    return redirect()->route('noticias');
});

// Route::get('admin/dashboard',function(){
//     return "dashboard";
// });

// Route::get('admin/users',function(){
//     return "dashboard";
// });

// Route::get('admin/clientes',function(){
//     return "dashboard";
// });

// Route::prefix('admin')->group(function(){
//     Route::get('dashboard',function(){
//         return "dashboard";
//     });
    
//     Route::get('users',function(){
//         return "dashboard";
//     });
    
//     Route::get('clientes',function(){
//         return "dashboard";
//     });
// });

// Route::name('admin.')->group(function(){
//     Route::get('admin/dashboard',function(){
//         return "dashboard";
//     })->name('dashboard');
    
//     Route::get('admin/users',function(){
//         return "users";
//     })->name('users');
    
//     Route::get('admin/clientes',function(){
//         return "clientes";
//     })->name('clientes');
// });

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
],function(){


    Route::get('dashboard',function(){
        return "dashboard";
    })->name('dashboard');
    
    Route::get('users',function(){
        return "users";
    })->name('users');
    
    Route::get('clientes',function(){
        return "clientes";
    })->name('clientes');
});

// Route::get ('/', 'PrimeiroController@hello');

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/server', ProvisionServer::class);
