<?php



use App\Models\postModel; 
use App\Models\Kategori; 
use App\Models\User; 
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\postController;

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

Route::get('/', [postController::class, 'landingBeranda'] );
Route::get('about', [postController::class, 'about']);
Route::get('tahun', [postController::class, 'tahunan']);
Route::get('single_post/{siaran:slug}',[postController::class,'singlePost'] 
// function($slug){
//     return view('post', [
//         "title" => "postfocus",
//         "body" => postModel::find($slug),
//     ]);
// }
);
Route::get('tes', [postController::class,'tes']);
Route::get('welcome', [postController::class, 'welcome']); 

Route::get('Kategori/{kategori:slug}', function (Kategori $kategori){
    return view('layouts.kategori', [
        'title' => $kategori->name,
        'siaran' => $kategori->siaran->load('user', 'kategori')
    ]);
});


Route::get('/authors/{user}', function (User $user){
    return view('layouts.perUser', [

        'title' => "Siaran per User : ".$user->name,
        'siaran' => $user->siaran->load('kategori', 'user'),

    ]);
}); 

Route::get('/kategori', function (Kategori $kategori){
    return view('layouts.semuaKategori', [

        'title' => "semua Kategori",
        'kategori' => Kategori::all()
    ]);
}); 
