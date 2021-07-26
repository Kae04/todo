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
            '削除' => $request-> create,
            'id' => $request->idate
        ];
        DB::table('list')->insert($param);
        return redirect('/todo/create');
    }
   public function edit(Request $request)
   {
       $param = ['id' => $request->id];
       $items = DB::select('select * from list where id = :id', $param);
       return view('edit', ['form' => $items[0]]);
   }
   public function update(Request $request)
   {
       $param = [
           'id' => $request->id,
           'タスク名' => $request->タスク名,
       ];
       DB::update('update list set タスク名 =:タスク名, where id =:id', $param);
       return redirect('/');
   }
   public function delete(Request $request)
   {
       $param = ['id' => $request->id];
       $item = DB::select('select * from list where id =:id', $param);
       return view('delet', ['form' => $item[0]]);
   }
}