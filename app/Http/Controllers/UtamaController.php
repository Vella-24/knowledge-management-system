<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once public_path('phpqrcode/phpqrcode/qrlib.php');

class UtamaController extends Controller
{
    public function boleh() {
        $arrData = ['Vella', 'Gading', 'Vern'];
        return view('oh', ['dataku' => $arrData]);
    }

    public function cobaQr(){
        $url ='http://daftar.ubaya.ac.id';
        $file = public_path('qrcode-daftar.png');
        \QRcode::png($url,$file);
        return view ('cobaqr');
    }
}
