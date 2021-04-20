<?php

use Illuminate\Support\Facades\Route;
//use App\MensagemTesteMail;

/*
|| Web Routes
|
| aqui é onde você pode registrar as rotas da web para o seu aplicativo. Esses
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". 
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')
    ->middleware('verified');

//Route::get('/mensagem-teste', function() {
 //   return new MensagemTesteMail();
    //Mail::to('auladeespanho7@gmail.com')->send(new MensagemTesteMail());
    //return 'E-mail enviado com sucesso!';
//});