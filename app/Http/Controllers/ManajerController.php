<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajerController extends Controller
{
    public function dashboard()
{
    return view('manajer.dashboard');
}

}
