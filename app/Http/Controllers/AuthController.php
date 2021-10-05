<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'NIS' => '3103119112',
            'Nama' => ' Fachmi Istiartono',
            'Gender' => 'LAKI - LAKI',
            'Phone' => '081216193440',
            'Class' => 'XII RPL 4',
        ];
    }
}
