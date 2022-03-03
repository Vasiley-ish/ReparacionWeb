@extends('layouts/reparacion-layout')

@section('title')
    Личный кабинет
@endsection

@section('label-css')
<link rel="stylesheet" href="css/filter_form.css">
@endsection

@section('main')
<div class="wrapper">
    <div class="container"> 
      <input type="checkbox" id="blue" name="color" checked />
      <label for="blue">+ Новая заявка</label>
    
     
          <form method="POST"  enctype="multipart/form-data" action="/dashboard/submit" class="tile blue">
          @csrf
              <input type="text" placeholder="Адрес" name="adress" id="adress">
              <select name="category" id="category">
                <option>Бюджетный ремонт</option> 
                <option>Оптимальный ремонт</option>
                <option>Премиум ремонт</option>
              </select>
              <input type="number" name="price"  id="price" value="10000">
              <textarea name="diskription" id="diskription" cols="30" rows="10" placeholder="Описание"></textarea>
              <input type="file" name="photo" id="photo" >
              <button> Создать заявку</button>
          </form>

          @foreach($data as $el)
                <div class="userroom-card">
                    <img src="{{ URL::to('/storage/img/su'.$el->photo)}}" alt="alt">
                    <div class="text-column text-wide">
                        <h4>Адрес: {{$el->adress}}</h4>
                        <p>Категория: {{$el->category}}</p>
                        <p class="bold">Бюджет: {{$el->price}} Руб.</p>
                        <p class="thin">{{$el->diskription}}</p>
                        <p class="thin"> {{$el->created_at}}</p>
                        <a href="{{route('delete', $el->id)}}"><button>Удалить</button></a>
                    </div>
                </div>
            @endforeach

    </div>
</div>
@endsection