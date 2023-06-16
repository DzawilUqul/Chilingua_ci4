<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TataBahasaController extends BaseController
{
    public function tatabahasa($data)
    {
        if($data == "polakalimatdasar_1"){
            return view('polaKalimatDasar_1');
        }
        else if($data == "polakalimatdasar_2"){
            return view('polaKalimatDasar_2');
        }
        else if($data == "katabendadenganshi"){
            return view('kataBendaDenganShi');
        }
        else if($data == "berlebihandengantai"){
            return view('berlebihanDenganTai');
        }
        else if($data == "katabendasifat"){
            return view('kataBendaSifat');
        }
        else{
            return view('404');
        }
    }
}
