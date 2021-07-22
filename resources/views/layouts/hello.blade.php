<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>@yield('title')</title>
    <style>
    .parent{ 
       background-color: #333399;

    }
    .child{
       background-color: white;
    }
   
   </style>
</head>
<body>
   
   <div class="content">
   @yield('content')
   </div>
</body>
</html>