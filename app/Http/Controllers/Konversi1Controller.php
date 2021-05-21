<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class Konversi1Controller extends Controller
{
    public function index()
    {
        $response = Http::get('https://blockchain.info/tobtc?currency=USD&value=500');
        $data = json_decode($response, true);
    
        return view('data.konversi1');
    }   
}
