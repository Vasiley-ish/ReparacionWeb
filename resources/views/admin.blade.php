@extends('layouts/reparacion-layout')

@section('title')
    Админка
@endsection

@section('main')
<div class="wrapper">
        @foreach($data as $el)
                <div class="userroom-card">
                    <img src="{{ URL::to('/storage/img/su'.$el->photo)}}" alt="alt">
                    <div class="text-column text-wide">
                        <h4>Адрес: {{$el->adress}}</h4>
                        <h4 class="smal">Автор: {{$el->name}}</h4>
                        <p>Категория: {{$el->category}}</p>
                        <p class="bold">Бюджет: {{$el->price}} Руб.</p>
                        <p class="thin">{{$el->diskription}}</p>
                        <p class="thin"> {{$el->created_at}}</p>
                        <a href="{{route('adminDelete', $el->id)}}"><button>Удалить</button></a>
                    </div>
                </div>
            @endforeach
</div>
@endsection