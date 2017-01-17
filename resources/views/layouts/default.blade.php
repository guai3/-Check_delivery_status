<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  @if (session('flash_message'))
  <div class="flash_message" onclick="this.classList.add('hidden')">{{ session('flash_message') }}</div>
  @endif
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
