<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Студенты группы {{$group->title}}</title>
  @vite(['resources/css/app.css'])
</head>
<body>
  <div class="groups-title">
    <div> 
      <div class="group-name">Студенты группы {{ $group->title }}</div>
      <div class="group-details">
        группа создана: {{ $group->start_from }}, действует: {{$group->is_active ? 'Да' : 'Нет'}}
      </div>
    </div>
    <a href="{{ url('/groups/' . $group->id . '/students/create') }}" class="btn groups-create-link">Добавить студента</a>
  </div>
  @foreach ($students as $student)
    @if ($loop->first)
      <div class='groups-header'>
        <div class="group-attr">Фамилия</div>
        <div class="group-attr">Имя</div>
      </div>
      <ul class="groups">
    @endif      
      <li>
        <a class="group-item" href="{{ url('/groups/' . $group->id . '/students/' . $student->id) }}">
          <div class="group-attr">{{ $student->surname }}</div>
          <div class="group-attr">{{ $student->name}}</div>
        </a>
      </ui>
    @if ($loop->last)
        </ul>
    @endif      
  @endforeach
  <div class="footer">
    <a class="btn back-to-list" href="{{ url('/groups') }}">К списку групп</a>
  </div>
</body>
</html>