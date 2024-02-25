<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Fungsi Index
    public function index()
    {
        return 'Selamat Datang';
    }

    // Fungsi About
    public function about()
    {
        return 'NIM &nbsp : 2241720018 <br>
                Nama : Wahyudi';
    }

    // Fungsi Atricles
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
