<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function store()
    {
        return view('users.store');
    }

}
