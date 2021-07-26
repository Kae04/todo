@extends('layouts.hello')
<style>
   th {
      
      color: black;
      padding: 5px 30px;
    }
    td {
      border: 1px solid black;
      padding: 5px 30px;
      text-align: center;
    }
</style>
@section('title', 'index.blade.php')

@section('content')

<table>
  <h1>Todo List</h1>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->作成日}}
    </td>
    <td>
      {{$item->content}}
    </td>
    <td>
      {{$item->更新}}
    </td>
    <td>
      {{$item->削除}}
    </td>
  </tr>
  @endforeach
</table>
@endsection 
