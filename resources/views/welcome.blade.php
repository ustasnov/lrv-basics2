<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Учебные группы</title>
  @vite(['resources/css/app.css'])
</head>
<body>
  <div class="main-container">
    <a href="{{ url('/groups') }}" class="groups-link">Учебные группы</a>
  </div>    
</body>
</html>