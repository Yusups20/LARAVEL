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

//Route Optional Parameter
Route::get('halo/{nama?}',function($nama='Ys'){
    return 'Hello Nama Saya'.$nama;
});

Route::get('pesanan/{makan?}/{minum?}/{harga?}',function($mkn=null,$mnm=null,$hrg=null){
    if  (isset($mkn)) {
        echo "Anda Memesan Makan : ".$mkn;
    }if (isset($mnm)) {
        echo "Dan : ".$mnm;
    }if (isset($hrg)) {
        echo "Dengan Harga : ".$hrg;
    }if ($mkn == null && $mnm == null && $hrg == null) {
        echo "Anda Belum Memesan";
    }
});

Route::get('/testmodel', function() {
$query = App\Post::all();
return $query;
});

Route::get('/testmodel2', function() {
$query = App\Post::find(1);
return $query;
});

Route::get('/testmodel3', function() {
$query = App\Post::where('title','like','%cepat nikah%')->get();
return $query;
});

Route::get('/testmodel4', function() {
$post = App\Post::find(1);
$post->title = "Ciri Keluarga Sakinah";
$post->save();
return $post;
});

Route::get('/testmodel5', function() {
$post = new App\Post;
$post->title = "7 Amalan Pembuka Jodoh";
$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
$post->save();
return $post;
});

Route::get('/penggajian', function() {
$query = App\Penggajian::all();
return $query;
});

Route::get('/penggajian-1',function(){
    $gaji = App\Penggajian::where('agama','=','islam')->get();
    return $gaji;
});

Route::get('tambah-data-gaji',function(){
    $gaji = New App\Penggajian();
    $gaji->nama = 'yusup';
    $gaji->jabatan = 'boss';
    $gaji->jk = 'laki laki';
    $gaji->alamat = 'bandung';
    $gaji->total_gaji = 10000000;
    $gaji->agama = 'islam';
    $gaji->save();
    return $gaji;
});

Route::get('halooo','LaravelController@hallo');
Route::get('halooo2','LaravelController@hallo2');
Route::get('halooo3','LaravelController@hallo3');
Route::get('halooo4','LaravelController@hallo4');
Route::get('halooo5','LaravelController@hallo5');
Route::get('halooo6','LaravelController@hallo6');
Route::get('halooo7','LaravelController@hallo7');
Route::get('halooo8','LaravelController@hallo8');
Route::get('halooo9','LaravelController@hallo9');
Route::get('halooo10','LaravelController@hallo10');
Route::get('jeniskucing/{warna?}','LaravelController@jeniskucing');

Route::get('membeli/{makan?}/{harga?}','LaravelController@beli');

//CRUD BOOK
Route::get('book','BookController@index');
Route::get('book-create/{judul}','BookController@create');
Route::get('book-show/{id}','BookController@show');
Route::get('book-edit/{id}/{jdl}','BookController@edit');
Route::get('book-delete/{id}','BookController@delete');
Route::get('select','BookController@latihan1');
Route::get('recordd','BookController@record');

//Artikel
// Route::get('ngoding','NgodingController@index');
// Route::get('ngoding/create','NgodingController@create');
// Route::get('ngoding/{id}','NgodingController@show');
// Route::get('ngoding/{id}/edit','NgodingController@edit');
// Route::PUT('ngoding/{id}','NgodingController@edit');
// Route::delete('delete/{id}','NgodingController@destroy');

Route::resource('ngoding','NgodingController');
