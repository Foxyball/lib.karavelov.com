<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse"
            data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand waves-effect waves-dark" href="{{url('/')}}"><img
                src="https://oldlib.karavelov.com/images/logo.png" alt=""></a>

        <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
    </div>

    <ul class="nav navbar-top-links navbar-right">

        <i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="" href="{{ route('admin.logout') }}"
                data-activates="dropdown1"><b>Изход</b></a></li>
    </ul>
</nav>
<!-- Dropdown Structure -->


<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu waves-effect waves-dark" href="{{url('/')}}"><i class="fa-solid fa-house"></i>
                    Начало</a>
            </li>
            @if (Auth::user()->role == 'admin')
            <li>
                <a href="#" class="waves-effect waves-dark"><i class="fa-solid fa-pencil"></i> Заявки <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="orders.html"><i class="fa-solid fa-plus"></i>Нова</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-bars"></i>Менажиране</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-hourglass-end"></i>Текущи заявки</a>
                    </li>



                </ul>
            </li>
            @endif
            @if (Auth::user()->role == 'admin')
            <li>
                <a href="#" class="waves-effect waves-dark"><i class="fas fa-users"></i> Потребители <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa-solid fa-plus"></i>Добавяне</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-bars"></i>Менажиране</a>
                    </li>
                </ul>
            </li>
            @endif
            @if (Auth::user()->role == 'admin')
            <li>
                <a href="#" class="waves-effect waves-dark"><i class="fa-solid fa-book"></i> Книги <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa-solid fa-plus"></i>Добавяне</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-bars"></i>Менажиране</a>
                    </li>
                </ul>
            </li>
            @endif
            @if (Auth::user()->role == 'admin')
            <li>
                <a href="#" class="waves-effect waves-dark"><i class="fas fa-th"></i> Издател <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('add.publisher')}}"><i class="fa-solid fa-plus"></i>Добавяне</a>
                    </li>
                    <li>
                        <a href="{{route('all.publisher')}}"><i class="fa-solid fa-bars"></i>Менажиране</a>
                    </li>
                </ul>
            </li>
            @endif
            @if (Auth::user()->role == 'admin')
            <li>
                <a href="#" class="waves-effect waves-dark"><i class="fa-solid fa-copyright"></i> Автор <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('add.author')}}"><i class="fa-solid fa-plus"></i>Добавяне</a>
                    </li>
                    <li>
                        <a href="{{route('all.author')}}"><i class="fa-solid fa-bars"></i>Менажиране</a>
                    </li>
                </ul>
            </li>
            @endif
            <li>
                <a href="#" class="waves-effect waves-dark"><i class="fa-solid fa-globe"></i> Жанр <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa-solid fa-plus"></i>Добавяне</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-bars"></i>Менажиране</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>

</nav>
