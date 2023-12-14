<?php

namespace App\Http\Controllers;

use App\Models\AcDatabase;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(Request $request, AcDatabase $acDatabase)
    {
        if ($request->routeIs('signin')) {
            return view('signin');
        } elseif ($request->routeIs('login')) {
            return view('login');
        } elseif ($request->routeIs('home')) {
            return view('home', [
                'datas' => $acDatabase->all()
            ]);
        }
    }
}
