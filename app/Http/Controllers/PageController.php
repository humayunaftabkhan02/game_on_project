<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function contactus() {
        return view('contactus');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }
}