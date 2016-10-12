<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    public function index()
    {
        return view('lorem.store');
    }

    public function store()
    {
        return view('lorem.store');
    }
}
