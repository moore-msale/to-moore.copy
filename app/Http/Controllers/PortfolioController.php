<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function page($id){
        $portfolio = Portfolio::find($id);

        return view('pages.portfolio',['portfolio' => $portfolio]);
    }


}
