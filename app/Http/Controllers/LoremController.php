<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    public function index()
    {
        return view('pages.lorem');
    }

    public function submit()
    {
        return view('pages.lorem');
    }

}
