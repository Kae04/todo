@section('title', 'edit.blade.php')

@section('content')
<form action="/todo/update" method="POST">
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
        <input type="text" name="タスク名" value="{{$form->タスク名}}">
      </td>
    </tr>
    
  </table>
  <button>送信</button>
</form>
@endsection