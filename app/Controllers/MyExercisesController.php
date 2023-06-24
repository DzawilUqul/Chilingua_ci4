<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuperQuizReadingModel;

class MyExercisesController extends BaseController
{
    var $quesMdl;

    public function __construct()
    {
        $this->quesMdl = new SuperQuizReadingModel();
    }

    public function index()
    {
        $data['ques'] = $this->quesMdl->findAll();
        
        return view('MyExercises',$data);
    }
}
