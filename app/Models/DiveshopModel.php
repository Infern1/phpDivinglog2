<?php namespace App\Models;

use CodeIgniter\Model;

class DiveshopModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Shop';
    protected $primaryKey = 'ID';

    public function get($ID)
    {
        return $this->asArray()
            ->where(['ID' => $ID])
            ->first();
    }
}
