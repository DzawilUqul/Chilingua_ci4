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

        return view('superQuizCek', $data);
    }

    public function editCatatan($id)
    {
        
        $result = $this->quesMdl->EditCatatan($this->request->getPost());
        if($result)
        {
            return redirect()->to('/cek//'.$id);
        } else 
        {
            return redirect()->to('/');
        }
    }
}