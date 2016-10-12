<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    public function __invoke()
    {
        return view('pages.lorem');
    }

}
