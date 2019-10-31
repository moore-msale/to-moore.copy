<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
