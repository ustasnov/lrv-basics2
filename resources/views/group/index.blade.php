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
    <h2>{{ $title }}</h2>
    <a href="{{ url('/groups/create') }}" class="btn groups-create-link">Добавить группу</a>
  </div>
  @foreach ($groups as $group)
    @if ($loop->first)
      <div class='groups-header'>
        <div class="group-attr">Наименование</div>
        <div class="group-attr">Создана</div>
        <div class="group-attr">Действующая</div>
      </div>
      <ul class="groups">
    @endif      
      <li>
        <a class="group-item" href="{{ url('/groups/' . $group->id) }}">
          <div class="group-attr">{{ $group->title }}</div>
          <div class="group-attr">{{ $group->start_from}}</div>
          <div class="group-attr">{{$group->is_active ? 'Да' : 'Нет'}}</div>
        </a>
      </ui>
    @if ($loop->last)
        </ul>
    @endif      
  @endforeach
</body>
</html>