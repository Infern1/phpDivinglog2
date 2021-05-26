<?php

namespace App\Models;

use CodeIgniter\Model;

class DivesModel extends Model
{
    protected $table = 'DL_Logbook';

    public function getDives($ID = false)
    {
        if ($ID === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['ID' => $ID])
            ->first();
    }
}
