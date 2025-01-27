<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentRequestController;
use App\Models\document as ModelsDocument;
use App\Models\document_request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Node\Block\Document;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // dd(Auth::user()->document_request);
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// //see all doc
Route::get('/document', function () {
    return view('document.index');
})->middleware(['auth'])->name('document');


// // view / download single doc
// Route::get('/document/{doc_id}', function (Document $doc_id) {
//     // return view('dashboard');
// })->middleware(['auth'])->name('documentCreate');


// regis
//upload new doc
Route::get('/regis_document', function () {
    return view('document.create');
})->middleware(['auth'])->name('regisDoc');
//post 
Route::post('/regis_document',  [DocumentRequestController::class,'create'] ) ->middleware(['auth']) -> name('createRegis');

//view my doc
Route::get('/regis_document/view/', [DocumentRequestController::class,'show',] ) ->middleware(['auth'])->name('regisOwn');

Route::get('/regis_document/manage/', [DocumentRequestController::class,'manage',] ) ->middleware(['auth'])->name('regisManage');


Route::post('/regis_document/manage/{id}',  [DocumentRequestController::class,'approve','$id'] ) ->middleware(['auth']) -> name('regisApprove');

// Route::get('/regis_document/view/', function(){
//     // Auth::user()->document_request
    
//     return view('document.regis',[
//         'documents'=>Auth::user()->document_request,
//     ]);
// })->middleware(['auth'])->name('regisOwn');

Route::get('/regis_document/view/{Doc_Code}', function($Doc_Code){
    return view('document.regisShow',[
        'documents'=>document_request::where('Doc_Code',$Doc_Code)->firstOrFail(),
    ]);
})->middleware(['auth'])->name('regisView');




Route::get('/document/{Doc_Code}', function ($Doc_Code) {
    return view('document.Show',[
        'documents'=>ModelsDocument::where('id',$Doc_Code)->firstOrFail(),
    ]);
})->middleware(['auth'])->name('documentView');
//manage all doc <- admin onlydesde
//approved doc by md <- md only



require __DIR__.'/auth.php';


