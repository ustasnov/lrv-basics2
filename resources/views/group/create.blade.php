<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Новая группа</title>
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

    <h2 class="form-title">Новая группа</h2>
    <form class="group-create-form" method="POST" action="/groups">
      @csrf
      <div class="form-input form-input-text">
        <label for="title">Наименование:</label>
        <input class="input-field" type="text" id="title" name="title" value="{{ old('title') }}"/>
      </div>
      <div class="form-input form-input-text">
        <label for="start_from">Дата создания:</label>
        <input class="input-field" type="date" id="start_from" name="start_from" value="{{ old('start_from') }}"/>
      </div>
      <div class="form-input form-input-checkbox">
        <label for="active_group">Активная</label>
        <input type="checkbox" id="active_group" name="is_active"/>
      </div>
      <div class="form-input form-buttons">
        <button class="form-button" type="submit">Сохранить</button>
        <a class="form-button reset-button" href="{{ url('/groups') }}">Отменить</a>
      </div>
    </form>  
  </div>  
</body>
</html>