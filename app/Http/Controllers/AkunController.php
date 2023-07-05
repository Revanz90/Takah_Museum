<?php

namespace App\Http\Controllers;

class AkunController extends Controller
{
    public function akun()
    {
        return view('app-layout.akun');
    }

    // public function namaakun()
    // {
    //     $user = Auth::id();
    //     // $useractive = $user;

    //     return view(['useractive' => $user]);
    // }
}
