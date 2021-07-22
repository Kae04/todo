<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from list');
        return view('index', ['items' => $items]);
    }
    
}
