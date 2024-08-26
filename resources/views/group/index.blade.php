<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Студенты</title>
  @vite(['resources/css/app.css'])
</head>
<body>
  <h1>{{$title}}</h1>
  @foreach ($groups as $group)
    <p class="group-item">{{ $group->title }}, начало обучения: {{ $group->start_from}}, активная: {{$group->is_active ? 'Да' : 'Нет'}}</p>
  @endforeach
</body>
</html>