<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TODO APP</title>
    <link rel="icon" href="#" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Tarek Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"
            integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <!-- Navbar -->
        @yield('navbar')

        <!-- Sidebar -->
        @yield('sidebar')

        <!--Main page -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a href="#">TODO APP</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1
            </div>
        </footer>
        <!-- End Footer -->
    </div>

<!-- Start of project Scripts -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI-->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- Bootstrap Notify -->
<script src="{{asset('plugins/bootstrap/js/bootstrap-notify.min.js')}}"></script>
<!-- Custom Modal For Ajax -->
<script src="{{asset('dist/js/modal.js')}}"></script>
<!-- Custom Modal -->
<script src="{{asset('dist/js/app.js')}}"></script>
<!-- Dark Mode Theme -->
<script>
    var otherDiv = document.getElementById('otherDiv');
    var img_animate = document.getElementById('welcomeLogo');
    // Retrieve the theme mode preference from localStorage
    var themeMode = localStorage.getItem('themeMode');
    // If the preference exists, set the body class and icon class accordingly
    if (themeMode === 'dark') {
        document.body.classList.add('dark-mode');
        document.getElementById('toggleMode').classList.remove('fa-moon');
        document.getElementById('toggleMode').classList.add('fa-sun');
        otherDiv.classList.add('navbar-dark');
        otherDiv.classList.remove('navbar-white');

    }
    else {
        document.body.classList.remove('dark-mode');
        document.getElementById('toggleMode').classList.remove('fa-sun');
        document.getElementById('toggleMode').classList.add('fa-moon');

    }

    function toggleTheme()
    {
        var body = document.getElementsByTagName("body")[0];
        var icon = document.getElementById('toggleMode');
        if (body.classList.contains("dark-mode")) {
            body.classList.remove("dark-mode");
            localStorage.setItem('themeMode', 'light');
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
            otherDiv.classList.add('navbar-white');
            otherDiv.classList.remove('navbar-dark');

        }
        else {
            body.classList.add("dark-mode");
            localStorage.setItem('themeMode', 'dark');
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
            otherDiv.classList.add('navbar-dark');
            otherDiv.classList.remove('navbar-white');

        }
    }
</script>
</body>
</html>
