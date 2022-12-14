<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ URL::asset('assets/css/master.css') }}">
</head>
<body>
  @section('nav')
    <nav class="nav">
      <ul class="nav_list">
        <li class="nav_list_item">
          <a class="active nav_list_item_link" href="#taaklijst">Taaklijst</a>
        </li>
        <li class="nav_list_item">
          <a class="nav_list_item_link" href="#login">login</a>
        </li>
      </ul>
    </nav>
  @show

  @yield('content')
</body>
</html>