<?php

namespace App\Models;

use CodeIgniter\Model;

class DivecountryModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Country';
    protected $primaryKey = 'ID';

    //protected $allowedFields = ['ID','Place','Comments'];

    public function noticeTable()
    {
        $builder = $this->db
            ->table('Country')
            ->select('Country.ID, Country.Country, COUNT(*) AS Dives ', false)
            ->join('Logbook', ' Country.ID = Logbook.CountryID ', 'inner')
            ->groupBy('Country.ID');

        return $builder;
    }

    public function get($ID)
    {
        return $this->asArray()
            ->where(['ID' => $ID])
            ->first();
    }
}