<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Карточка студента</title>
  @vite(['resources/css/app.css'])
</head>
<body>
  <div class="student-details"> 
    <div class="groups-title">
      <h2>Карточка студента</h2>
    </div>
    <ul class="student-attr-list">
      <li class="student-list-item">Фамилия: {{$student->surname}}</li>
      <li class="student-list-item">Имя: {{$student->name}}</li>
      <li class="student-list-item">Группа: {{$group->title}}</li>
  </ul>
  </div>
  <div class="footer">
    <a class="btn back-to-list" href="{{ url('/groups/' . $group->id) }}">К группе</a>
  </div>
</body>
</html>