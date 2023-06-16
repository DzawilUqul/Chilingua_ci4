<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('Home');
    }

    public function courses()
    {
        return view('courses');
    }

    public function superQuiz()
    {
        return view('superQuiz');
    }

    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function superQuizListening()
    {
        return view('superQuizListening');
    }
}
