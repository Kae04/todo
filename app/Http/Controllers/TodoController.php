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
    
    public function create(Request $request)
    {
        $param = [
            '作成日' => $request->作成日,
            'タスク名' => $request->タスク名,
            '更新' => $request-> updete,
            '削除' => $request-> create
        ];
        DB::table('list')->insert($param);
        return redirect('/');
    }
}