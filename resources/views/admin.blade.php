@extends('layouts/reparacion-layout')

@section('title')
    Админка
@endsection

@section('main')
<div class="wrapper">
    <div class="userroom-card">
        <img src="img/2250619.jpg" alt="alt">
        <div class="text-column text-wide">
            <h4>ул. 40 лет Победы д. 140</h4>
            <h4 class="smal">Автор: Иванов Иван Иванович</h4>
            <p>Категория: Бюджетный</p>
            <p class="bold">Максимальная стоимость: 60 000</p>
            <p class="thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel tortor in orci
                facilisis dapibus. Pellentesque maximus blandit orci et ultricies. Donec rhoncus mi sed
                consectetur tristique. Nulla posuere risus vel commodo dictum. Maecenas mollis enim nec orci
                blandit venenatis. Fusce et varius libero. Donec nec faucibus sem. Quisque volutpat congue
                rutrum.</p>
            <p class="thin"> 12-01-2022 12:05:56</p>
            <a href="#"><button>Удалить</button></a>
        </div>
    </div>
</div>
@endsection