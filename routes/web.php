<?php

Route::get('/', function () {
    return view('welcome');
});


//Route Basic
// Route::get('/about',function(){
//     return '<h1>HALLO</h1>'.
//     'Selamat Datang Di WebApp Saia ^_^<br>'.
//     'Laravel , emang Keren.';
// });

// Route::get('profil',function()
// {
//     return view('biodata');
// });

// Route::get('profil2',function()
// {
//     return view('bod2');
// });

// Route::get('profil3',function()
// {
//     return view('bod3');
// });

// Route::get('profil4',function()
// {
//     return view('bod4');
// });

// Route::get('profil5',function()
// {
//     return view('bod5');
// });

Route::get('pesan/{makan}/{minum}/{harga}',function($mkn,$mnm,$hrg){
    return 'Makanan Yang Saya Pesan Adalah : '.$mkn.'<br>'
    .'Minuman : '.$mnm.'<br>'
    .'Total Harga : '.$hrg;
});
