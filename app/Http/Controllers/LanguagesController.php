<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguagesController extends Controller
{
    public function set($lang) {
         Session::put(['applocale' => $lang]);

        return back();
    }
}
