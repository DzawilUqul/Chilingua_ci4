<?php

namespace App\Controllers;

class CoursesController extends BaseController
{
    public function kosakata()
    {
        return view('kosakata');
    }

    public function tatabahasa()
    {
        return view('tataBahasa');
    }

    public function pengucapan()
    {
        return view('pengucapan');
    }
}