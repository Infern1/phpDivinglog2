<?php

namespace App\Models;

use CodeIgniter\Model;

class DivelogModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Logbook';
    protected $primaryKey = 'ID';

    //protected $allowedFields = ['ID','Place','Comments'];

    public function noticeTable()
    {
        $builder = $this->db->table('Logbook')
            ->select('ID,Number,Divedate,Divetime,Depth,Place,City,Profile');
        return $builder;
    }


    public function get($ID)
    {
        return $this->asArray()
            ->where(['ID' => $ID])
            ->first();
    }
}
