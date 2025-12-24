@extends('layouts.app')

@section('content')
<h3>Login</h3>

<form method="POST" action="/login">
    @csrf

    <label>Email</label><br>
    <input type="email" name="email"><br><br>

    <label>Password</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>
@endsection
