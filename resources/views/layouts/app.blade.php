<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Absensi</title>
</head>
<body>

    <nav>
        <a href="/admin/dashboard">Admin</a> |
        <a href="/karyawan/dashboard">Karyawan</a> |
        <a href="/manajer/dashboard">Manajer</a> |
        <a href="/logout">Logout</a>
    </nav>

    <hr>

    <div>
        @yield('content')
    </div>

</body>
</html>
