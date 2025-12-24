<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Absensi</title>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">ABSENSI</a>

        @auth
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                @if(auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                @elseif(auth()->user()->role == 'karyawan')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('karyawan.dashboard') }}">Dashboard</a>
                    </li>
                @elseif(auth()->user()->role == 'manajer')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manajer.dashboard') }}">Dashboard</a>
                    </li>
                @endif

                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger btn-sm ms-3">Logout</button>
                    </form>
                </li>

            </ul>
        </div>
        @endauth
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
