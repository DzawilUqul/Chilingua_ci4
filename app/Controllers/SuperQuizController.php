<?php

namespace App\Controllers;

use App\Models\SuperQuizReadingModel;


class SuperQuizController extends BaseController
{
    var $quesMdl;

    public function __construct()
    {
        $this->quesMdl = new SuperQuizReadingModel();
    }
    
    public function index()
    {
        $data['ques'] = $this->quesMdl->findAll();
        
        return view('superQuizCek',$data);
    }

    public function editCatatan()
    {
        $data = $this->request->getPost();
        $options = array($data['option1'],$data['option2'],$data['option3'],$data['option4'],$data['option4']);

        $result = $this->quesMdl->EditValue($data, $options);
        if ($result) {
            return redirect()->to('/MyExercises');
        } else
        {
            echo "error";
        }
    }
}