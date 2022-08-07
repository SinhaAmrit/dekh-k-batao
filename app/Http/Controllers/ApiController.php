<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $req)
    {
        $req->validate([
            'link' => 'required|active_url',
        ]);
        $api_url = 'https://api.peekalink.io/';
        $response = Http::withHeaders([
            'X-API-Key' => '6879c893-666c-4568-b8a3-351d21d6b3b6'
        ])->post($api_url, [ 'link' => $req->link ]);
        $preview = json_decode($response->getBody(), true);
        return $preview;
    }
}
