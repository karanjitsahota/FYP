<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index() {
        return view('pages.welcome');
    }
    public function Services() {
        return view('pages.Services');
    }
    public function Register() {
        return view('pages.register');
    }
    public function Create() {
        return view('posts.Create');
    }
    public function search() {
        return view('Pages.search');
    }
    public function payment() {
        return view('pages.payment');
    }
    

}
