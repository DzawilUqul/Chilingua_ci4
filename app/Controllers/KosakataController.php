<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KosakataController extends BaseController
{
    public function hsk1($hsk)
    {
        if ($hsk == 'HSK1_1') {
            return view('kosakataHSK1_1');
        } else if ($hsk == 'HSK1_2') {
            return view('kosakataHSK1_2');
        } else if ($hsk == 'HSK1_3') {
            return view('kosakataHSK1_3');
        } else if ($hsk == 'HSK1_4') {
            return view('kosakataHSK1_4');
        } else if ($hsk == 'HSK1_5') {
            return view('kosakataHSK1_5');
        } 
        
        else if ($hsk == 'HSK2_1') {
            return view('kosakataHSK2_1');
        } else if ($hsk == 'HSK2_2') {
            return view('kosakataHSK2_2');
        } else if ($hsk == 'HSK2_3') {
            return view('kosakataHSK2_3');
        } else if ($hsk == 'HSK2_4') {
            return view('kosakataHSK2_4');
        } else if ($hsk == 'HSK2_5') {
            return view('kosakataHSK2_5');
        } 
        
        
        else if ($hsk == 'HSK3_1') {
            return view('kosakataHSK3_1');
        } else if ($hsk == 'HSK3_2') {
            return view('kosakataHSK3_2');
        } else if ($hsk == 'HSK3_3') {
            return view('kosakataHSK3_3');
        } else if ($hsk == 'HSK3_4') {
            return view('kosakataHSK3_4');
        } else if ($hsk == 'HSK3_5') {
            return view('kosakataHSK3_5');
        } else if ($hsk == 'HSK3_6'){
            return view('kosakataHSK3_6');
        }  else if ($hsk == 'HSK3_7'){
            return view('kosakataHSK3_7');
        } else if ($hsk == 'HSK3_8'){
            return view('kosakataHSK3_8');
        } else if ($hsk == 'HSK3_9'){
            return view('kosakataHSK3_9');
        } else if ($hsk == 'HSK3_10'){
            return view('kosakataHSK3_10');
        } 
    }
}
