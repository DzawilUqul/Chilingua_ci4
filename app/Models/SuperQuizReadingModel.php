<?php

namespace App\Models;

use CodeIgniter\Log\Handlers\ErrorlogHandler;
use CodeIgniter\Model;
use DOTNET;
use PhpParser\Node\Stmt\Echo_;

class SuperQuizReadingModel extends Model
{
    protected $table = 'super_quiz_reading';
    protected $primaryKey = 'id';
    protected $allowedFields = ['catatan','user_answer'];

    public function EditCatatan($post)
    {
        $ques = $this->table('super_quiz_reading');

        $data = [
            'id' => $post['id'],
            'catatan' => $post['catatan']
        ];
        $ques->where('id', $post['id'])->update($data);
    }

    public function EditValue($post,$options)
    {
            foreach ($post['id'] as $key => $value) {
                $batch[] = array(
                    'id' => $post['id'][$key],
                    'catatan' => $post['catatan'][$key],
                    'user_answer' => $options[$key][0]
                );
            }
            // d($batch);

        $this->updateBatch($batch, 'id');
        return true;
    }
}
