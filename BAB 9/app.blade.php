<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tampil-data.css') }}">
    <link rel="stylesheet" href="{{ asset('css/information-entry.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hapus.css') }}">
</head>

<body>
    @include('partials.sidebar') 

    <div class="main-content">
        <div class="navbar">
            <a href="{{ url('home') }}">HOME</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTINGS</a>
            <a href="{{ url('logout') }}">LOGOUT</a>
            <div class="profile-icon">👤</div>
        </div>

        <div class="content">
            @yield('content') 
        </div>


    </div>
</body>

</html>
