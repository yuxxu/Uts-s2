<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function hitung(){
        $billOne = 5;
        $billTwo = 8;
        $billThree = 2;
        $hasil = $billOne + $billTwo + $billThree;
        return view('hitung', ['hasilJumlah'=>$hasil]);
    }
}
