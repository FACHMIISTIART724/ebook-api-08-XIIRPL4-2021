<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Status' => '200',
            'Message' => 'Success',
            'Nama' => 'Fahmi Istiartono',
            'Kelas' => 'XII RPL 4',
            'Absen' => '08',
            'TTL' => 'Tegal, 07 Januari 2004'
        ];
    }
}
