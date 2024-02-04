<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataController extends Controller
{
    public function index()
    {
        $data = Header::all();
        $galeri = Galeri::all();
        $guru = Guru::all();

        return view('welcome', [
            "data" => $data,
            "galeri" => $galeri,
            "guru" => $guru,
        ]);
    }
}
