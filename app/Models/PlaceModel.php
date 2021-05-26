<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaceModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'DL_Place';
    protected $primaryKey = 'ID';

    //protected $allowedFields = ['ID','Place','Comments'];

    public function noticeTable()
    {

        $builder = $this->db->table('DL_Place')
            ->select('DL_Place.ID , DL_Logbook.Country, DL_Place.Place, DL_Logbook.City, DL_Place.MaxDepth')
            ->join('DL_Logbook', 'DL_Place.ID = DL_Logbook.PlaceID', 'inner')
            ->groupBy('DL_Place.ID');

        return $builder;
    }

    public function get($ID)
    {
        return $this->asArray()
            ->where(['ID' => $ID])
            ->first();
    }
}
