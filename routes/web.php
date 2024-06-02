<?php

use App\Models\Postingan;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Halaman Home / Beranda
Route::get('/', function () {
    return view('home',['halaman'=>'Home']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Halaman About
Route::get('/about', function(){
    return view('about',['halaman'=>'About Us']);
});

//Halaman Blog
Route::get('/blog', function(){
    return view('blog',['halaman'=>'Blog','posts'=>Postingan::all()]);
});

//Halaman Contact
Route::get('/contact',function(){
    return view('contact',['halaman'=>'Contact']);
});

//Halaman Produk
Route::get('/produk', function(){
    return view('produk',['halaman'=>'Product']);
});

//Halaman Profile
Route::get('/profile',function(){
    return view('profile',['halaman'=>'Profile']);
});

//Halaman Services
Route::get('/service',function(){
    return view('service',['halaman'=>'Services']);
});

//Halaman Menampilkan Postingan Full
Route::get('/blog/{post:slug}', function( Postingan $post){
    //Kirim data ke view postingan
    return view('postingan',['title'=>'Postingan Blog','post'=>$post]);

});
