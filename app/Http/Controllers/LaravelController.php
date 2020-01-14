<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function hallo()
    {
        return "Hallo Dunia";
    }
    public function hallo2()
    {
        return "IM HERE MAN";
    }
    public function hallo3()
    {
        return "LOOK AT ME";
    }
    public function hallo4()
    {
        return "I HAVE ALIVE";
    }
    public function hallo5()
    {
        return "DON'T SEE";
    }
    public function hallo6()
    {
        return "BREAK THE LIMIT";
    }
    public function hallo7()
    {
        return "I LIKE U";
    }
    public function hallo8()
    {
        return "I DON'T KNOW";
    }
    public function hallo9()
    {
        return "SEE U";
    }
    public function hallo10()
    {
        return "GOOD BAi";
    }
    public function jeniskucing($warna=null)
    {
        if  ($warna == null) {
        return "Anda Belum Memilih";
    }else {
        return "warna kucing anda : ".$warna;
    }
    }
    public function beli($makan=null,$harga=null)
    {
        if  (isset($makan)) {
        echo "Anda Memesan : " .$makan;
        }
        if (isset($harga)) {
        echo " Dengan Ukuran";
        if ($harga >= 15000 ) {
        echo " Jumbo";
        }elseif ($harga < 15000 && $harga >=7500) {
        echo " Medium";
        }elseif ($harga < 7500) {
        echo " Small";
        }
        }
        if (!$makan) {
            echo "Silahkan Memesan terlebih dahulu";
        }else {
            echo "Anda Memasukan Angka Yang Salah";
        }
    }
}
