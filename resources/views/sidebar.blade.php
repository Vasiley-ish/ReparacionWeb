@section('sidebar')

<div class="sidebar">
        <div class="sidebar__header">
            <div class="">
                <a href="#" class="icon sidebar__eye-icon ">
                    <svg class="icon">
                        <use xlink:href="#eye"></use>
                    </svg>
                </a>
            </div>

            <div class="logo sidebar__logo">
                <a href="{{route('landing')}}" class="logo__link">
                <img src="{{ URL::asset('img/logo-house.png') }}" alt="a" class="logo__img">
                </a>
            </div>
            <p class="sidebar__title">House of Hough</p>

            <div class="user sidebar__user">

                <a href="#" class="icon header__gear-icon">
                    <svg class="icon">
                        <use xlink:href="#gear"></use>
                    </svg>
                </a>
                <a href="#" class="user__title">{{Auth::user()->email}}</a>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <svg class="icon">
                                     <use xlink:href="#exit"></use>
                                </svg>
                            </a>
                        </form>
                   
            

            </div>

        </div>

        <ul class="menu">
            <li class="menu__item">
                <a href="#" class="sidebar-link ">dashboard</a>
            </li>
            <li class="menu__item">
                <a href="#" class="sidebar-link">pages</a>
            </li>
            <li class="menu__item">
                <label for="name" class="submenu-label">
                    <p class="submenu-label__text sidebar-link ">Components</p>
                </label>

                <ul class="submenu">
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Orders</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Products</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Categories</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Attributes</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Shipping methods</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Promo tools</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">CSV Import</a>
                    </li>
                </ul>
            </li>
            <li class="menu__item">
                <label for="name" class="submenu-label">
                    <p class="submenu-label__text sidebar-link">E-Commerce</p>

                </label>
                <ul class="submenu">
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Header&Footer</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Team members</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Vacancies</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">FAQ Categories</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">FAQ Questions</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Testimonials</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Portfolio</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Featured</a>
                    </li>
                </ul>
            </li>
            <li class="menu__item">
                <label for="name" class="submenu-label">
                    <p class="submenu-label__text sidebar-link">Forms</p>
                </label>
                <ul class="submenu">
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Forms</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Leads</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Leads statuses</a>
                    </li>
                </ul>
            </li>
            <li class="menu__item">
                <label for="name" class="submenu-label">
                    <p class="submenu-label__text sidebar-link">Payments</p>
                </label>
                <ul class="submenu">
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Transactions</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Refunds</a>
                    </li>
                </ul>
            </li>
            <li class="menu__item">
                <a href="#" class="sidebar-link">customers</a>
            </li>
            <li class="menu__item">
                <a href="#" class="sidebar-link">media</a>
            </li>
            <li class="menu__item">
                <a href="#" class="sidebar-link">users</a>
            </li>
            <li class="menu__item">
                <label for="name" class="submenu-label">
                    <p class="submenu-label__text sidebar-link">Settings</p>
                </label>
                <ul class="submenu">
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Scripts</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Call Tracking</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Emails</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Contacts</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Notifications</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Socials</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">reCaptcha</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__link sidebar-link">Subscription</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="sidebar__footer">
            <div class="sidebar__footer-text">Powered By</div>
            <div class="logo">
                <a href="#" class="logo__link">
                    <img src="{{ URL::asset('img/logo-regexseo.svg') }}" alt="a" class="logo__img logo--small"  width='100px'>
                </a>
            </div>
        </div>
    </div>
