<?php

namespace App\Models;

use CodeIgniter\Log\Handlers\ErrorlogHandler;
use CodeIgniter\Model;
use PhpParser\Node\Stmt\Echo_;

class SuperQuizReadingModel extends Model
{
    protected $table = 'super_quiz_reading';
    protected $primaryKey = 'id';
    protected $allowedFields = ['bool','catatan','que_text','que_img'];

    public function EditCatatan($post)
    {
        $ques = $this->find($post['id']);
        if($ques)
        {
            $ques["catatan"] = $post['catatan'];
            $this->save($ques);
            return true;
        } else 
        {
            return false;
        }
    }
}
