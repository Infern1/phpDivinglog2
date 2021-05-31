<?php namespace App\Models;

use CodeIgniter\Model;

class DivetripModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Trip';
    protected $primaryKey = 'ID';

    public function get($ID)
    {
        return $this->asArray()
            ->where(['ID' => $ID])
            ->first();
    }
}