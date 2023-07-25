<?php

use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Utilisateurs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/articles', function () {
    return Article::with("type")->paginate(10);
});

Route::get('/type', function () {
    return TypeArticle::with("articles")->paginate(5);
});

Auth::routes();



Route::group(
    [
        "middleware" => ["auth", "auth.admin"],
        'as' => 'admin.'
    ],
    function () {

        Route::group([
            "prefix" => "habilitations",
            'as' => 'habilitations.'
        ], function () {

            Route::get("/utilisateurs", Utilisateurs::class, "index")->name("users.index");
            //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
            //

        });
        //     Route::group([
        //         "prefix" => "gestarticles",
        //         'as' => 'gestarticles.'
        //     ], function () {

        //         Route::get("/types", TypeArticleComp::class)->name("types");
        //         Route::get("/articles", ArticleComp::class)->name("articles");
        //         Route::get("/articles/{articleId}/tarifs", TarifComp::class)->name("articles.tarifs");
        //     });
    }
);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
