<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $user = Auth::User() ? Auth::User()->name : "Guest";
        return view('templates/header')
            . view('page/home', ['user' => $user])
            . view('templates/footer');
    }

    public function create() {
        return view('templates/header')
            . view('page/create')
            . view('templates/footer');
    }
}
