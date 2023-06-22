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

    public function ViewQue($id)
    {
        $data['ques'] = $this->quesMdl->where('id', $id)->findAll();

        if( $id != '1')
        {
            echo"<script type='text/JavaScript'>
            prevButton.classList.remove('disabled');
            prevButton.classList.remove('opacity');
            </script>";
        }

        return view('superQuizCek', $data);
    }

    public function editCatatan()
    {
        $data = $this->request->getPost();
        $options = array($data['option1'],$data['option2']);

        $result = $this->quesMdl->EditValue($data, $options);
        if ($result) {
            return view('MyExercises');
        } else
        {
            echo "error";
        }
    }
}