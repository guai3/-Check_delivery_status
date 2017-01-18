<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/css/styles.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  @if (session('flash_message'))
  <div class="flash_message" onclick="this.classList.add('hidden')">{{ session('flash_message') }}</div>
  @endif
  <div class="container" style= "padding:20px 0">
    @yield('content')
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
