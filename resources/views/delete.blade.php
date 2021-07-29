@extends('layouts.hello')
<style>
  th {
      background-color: black;
      color: white;
      padding: 5px 30px;
    }
    td {
      border: 1px solid black;
      padding: 5px 30px;
      text-align: center;
    }
    button {
      padding: 10px 20px;
      background: black;
      color: white;
    }
</style>
@section('title', 'delete.blade.php')

@section('content')
<form action="/todo/delete" method="POST">
@csrf
  <table>
    @csrf
    <tr>
      <th>
        id
      </th>
      <td>
        <input type="text" name="id" value="{{$form->id}}">
      </td>
    </tr>
    <tr>
      <th>
        タスク名
      </th>
      <td>
        <input type="text" name="content" value="{{$form->content}}">
      </td>
    </tr>
    
  </table>
  <button>削除</button>
</form>
@endsection