<?php namespace App\Models;

use CodeIgniter\Model;

class PlaceModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'DL_Place';
    protected $primaryKey = 'ID';

    //protected $allowedFields = ['ID','Place','Comments'];

    public function noticeTable(){
        $builder = $this->db->table('DL_Place');
        //$builder->select('*');
        //$builder->join('DL_Logbook','DL_Place.ID = DL_Logbook.PlaceID','inner');

        $builder2 = $this->db->table('DL_Place');
        $builder2->select('*');
        $builder2->join('DL_Logbook','DL_Place.ID = DL_Logbook.PlaceID','inner');
        echo $builder2->get();
        return $builder;
    }

    public function getPlace($ID){
        return $this->asArray()
                    ->where(['ID' => $ID])
                    ->first();
    }
}
