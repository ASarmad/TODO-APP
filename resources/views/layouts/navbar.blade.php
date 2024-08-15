@extends('app')

@section('navbar')
    <nav class="main-header navbar navbar-expand navbar-light" id="otherDiv">
        <!-- Left navbar Controls -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ Route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ Route('setting') }}" class="nav-link">Setting</a>
            </li>
        </ul>

        <!-- Right navbar Controls -->
        <ul class="navbar-nav ml-auto">
            <!-- DarkMode Button -->
            <li class="nav-item">
                <div class="nav-link" role="button" onclick="toggleTheme()">
                    <i class=" fas fa-solid fa-sun" id="toggleMode"></i>
                </div>
            </li>
            <!-- LOG OUT Button -->
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-navbar" type="submit" class="dropdown-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </button>
                </form>
            </li>
        </ul>
    </nav>
@endsection
