<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index(){
        $platos = DB::table('platos')->get();
    return view('platos', ['platos'=>$platos]);
    }
}
