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
            'id' => $request->id,
            'content' => $request->content,
            'updated_at' => $request->updete,
            'created_at' => $request->create,
        ];
        DB::table('list')->insert($param);
        return redirect('/');
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
           'content' => $request->content,
       ];
       DB::update('update list set content =:content, where id =:id', $param);
       return redirect('/');
   }
   public function delete(Request $request)
   {
       $param = ['id' => $request->id];
       $item = DB::select('select * from list where id =:id', $param);
       return view('delet', ['form' => $item[0]]);
   }
}