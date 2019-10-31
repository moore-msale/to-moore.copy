<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Mail\Message2;
use App\Mail\Task;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(Request $request)
    {
        \Mail::to('buvladi@gmail.com')->send(new Message($request->all()));

        return back();
    }

    public function message(Request $request)
    {
        \Mail::to('buvladi@gmail.com')->send(new Message2($request->all()));

        if ($request->ajax()){
            return response()->json([
                'status' => "success",
            ]);
        }

        return back();
    }

    public function task(Request $request)
    {
//        dd($request->all());
        \Mail::to('buvladi@gmail.com')->send(new Task($request->all()));

        return back();
    }
}
