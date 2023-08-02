<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ColorController extends Controller
{
    public function index(){
        $data = Http::get('https://api.prolook.com/api/colors/prolook');
        $decoded =  json_decode($data);
        $colors =  $decoded->colors;
        return view('index',['colors'=>$colors]);
    }
}
