<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KosakataController extends BaseController
{
    public function hsk1()
    {
        return view('kosakataHSK1_1');
    }

    public function hsk2()
    {
        return view('kosakataHSK2_1');
    }

    public function hsk3()
    {
        return view('kosakataHSK3_1');
    }
}
