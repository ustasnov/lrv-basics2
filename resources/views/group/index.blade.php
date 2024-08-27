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
  <div class="groups-title">
    <h2>{{$title}}</h2>
    <a href="{{ url('/groups/create') }}" class="groups-create-link">Добавить группу</a>
  </div>
  @foreach ($groups as $group)
    @if ($loop->first)
      <ul class="groups">
    @endif      
      <li class="group-item">{{ $group->title }}, начало обучения: {{ $group->start_from}}, активная: {{$group->is_active ? 'Да' : 'Нет'}}</ui>
    @if ($loop->last)
        </ul>
    @endif      
  @endforeach
</body>
</html>