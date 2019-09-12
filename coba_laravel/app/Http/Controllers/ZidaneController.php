<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZidaneController extends Controller
{
    public function index(){
      return "Haloo ZidaneIqbalL";
    }
    public function passData(){
      $zidane = "Zidane Iqball";
      $bias = ["Kim Yerim","IU","Rose","Nayeon"];
      return view('passData', ['nama' => $zidane, 'jodoh' => $bias]);
    }
    public function reqData($zidane){
      return $zidane;
    }
    public function form(){
      return view('form');
    }
    public function isi(request $request){
      $nama = $request->input('nama');
      $kelas = $request->input('kelas');
      $angkatan = $request->input('angkatan');
      return "Nama : ".$nama. ", Kelas : ".$kelas. ", Angkatan : ".$angkatan;
    }
}
