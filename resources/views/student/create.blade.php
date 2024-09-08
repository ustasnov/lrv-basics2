<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Новый студент группы {{$group->title}}</title>
  @vite(['resources/css/app.css'])
</head>
<body>
  <div class="group-form-container">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="alert-list">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <h2 class="form-title">Новый студент группы {{$group->title}}</h2>
    <form class="group-create-form" method="POST" action="/groups/{{$group->id}}/students">
      @csrf
      <div class="form-input form-input-text">
        <label for="surname">Фамилия:</label>
        <input class="input-field" type="text" id="surname" name="surname" value="{{ old('surname') }}"/>
      </div>
      <div class="form-input form-input-text">
        <label for="name">Имя:</label>
        <input class="input-field" type="text" id="name" name="name" value="{{ old('name') }}"/>
      </div>
      <div class="form-input form-buttons">
        <button class="form-button" type="submit">Сохранить</button>
        <a class="form-button reset-button" href="{{ url('/groups/' . $group->id) }}">Отменить</a>
      </div>
    </form>  
  </div>  
</body>
</html>