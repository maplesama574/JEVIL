<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JevilController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function log()
    {
        return view('log');
    }

    public function hidden()
    {
        return view('hidden');
    }

    public function update()
    {
        return view('update');
    }
}
