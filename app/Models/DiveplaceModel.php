<?php

namespace App\Models;

use CodeIgniter\Model;

class DiveplaceModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Place';
    protected $primaryKey = 'ID';

    //protected $allowedFields = ['ID','Place','Comments'];

    public function noticeTable()
    {
        $builder = $this->db
            ->table('Place')
            ->select(
                'Place.ID , Logbook.Country, Place.Place, Logbook.City, Place.MaxDepth,COUNT(*) AS Dives',
                false
            )
            ->join('Logbook', ' Place.ID = Logbook.PlaceID ', 'inner')
            ->groupBy('Place.ID');
        return $builder;
    }

    public function get($ID)
    {
        return $this->asArray()
            ->where(['ID' => $ID])
            ->first();
    }
}