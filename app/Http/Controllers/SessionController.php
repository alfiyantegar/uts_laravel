<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function tampilkanSession(request $request){
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');
        }else{
            echo 'tidak ada data dalam session:';
        }
    }


    public function buatSession(Request $request){
        $request->session()->put('nama','Alfiyan Tegar - Administrator');
        echo  "data telah ditambahkan ke Session";
    }

    public function hapusSession(Request $request){
        $request->session()->forget('nama');
        echo "Data telah dihapus dari session";
    }
}
