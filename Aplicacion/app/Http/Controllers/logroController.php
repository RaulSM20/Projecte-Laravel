<?php

namespace App\Http\Controllers;

use App\Models\Logros;
use Illuminate\Http\Request;

class logroController extends Controller
{
    public function index()
    {

        $logros = Logros::all();

        return view('Front Page.logros', ['logros' => $logros]);
    }
}
