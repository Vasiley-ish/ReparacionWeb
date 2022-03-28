@section('header')
<header>
        <nav class="useless-nav">
                <!-- Если пользователь гость -->
            @if(!Auth::user())
                <a class='useless-nav__link' href="/login">Вход</a>
                <p class='useless-nav__link'>|</p>
                <a class='useless-nav__link' href="/dashboard">Регистрация</a>
            @endif

            <!-- Если пользователь авторизован -->
            @if(Auth::user())

                @switch(Auth::user()->name)
                    @case('Админ')
                    <a href="/admin" class='useless-nav__link'>Панель админа </a>
                    @break
                    
                    @default
                    <a href="/dashboard" class='useless-nav__link'>Личный кабинет</a>
                @endswitch

                <p class="useless-nav__link">|</p>
                <form class="nom" method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link  class="useless-nav__link" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выход') }}
                            </x-dropdown-link>
                        </form>

            @endif
            </div>
        </nav>
    </header>