<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
  <main class="container">
    <h1 class="display-4">Hello, Laravel + Bootstrap!</h1>
    <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
  </main>
</body>

</html>
