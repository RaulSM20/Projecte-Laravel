<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class retoController extends Controller
{
    public function index() {
        

        return view('Front Page.retos');
    }
}
