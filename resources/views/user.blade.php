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
    
     
          <form action="POST" class="tile blue">
              <input type="text" placeholder="Адрес" id="adress">
              <select name="select" id="category">
                <option value="low" selected>Бюджетный ремонт</option> 
                <option value="mid" >Оптимальный ремонт</option>
                <option value="top">Премиум ремонт</option>
              </select>
              <input type="number" id="price" value="10000">
              <textarea name="discription" id="discription" cols="30" rows="10" placeholder="Описание"></textarea>
              <input type="file" id="photo" >
              <button> Создать заявку</button>
          </form>

          <div class="userroom-card">
            <img src="img/2250619.jpg" alt="alt">
            <div class="text-column text-wide">
                <h4>ул. 40 лет Победы д. 140</h4>
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
</div>
@endsection