<?php

namespace App\Models;

use CodeIgniter\Model;

class DiveequipmentModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Equipment';
    protected $primaryKey = 'ID';

    //protected $allowedFields = ['ID','Place','Comments'];

    public function noticeTable()
    {
        $config = config('DiveLogConfig');
        /*SELECT		ID,
		Object,
		Manufacturer,
		Inactive,
		PhotoPath,
		((to_days( now()) > (to_days(DateRN) - $_config[equipment_service_warning]))
OR 		(to_days( now()) > (to_days(O2ServiceDate) - $_config[equipment_service_warning])))
AND		(Inactive = 'False')
AS 		Service
FROM		$_config[table_prefix]Equipment
ORDER BY 	Inactive DESC, Object ASC, DateP ASC, Manufacturer ASC*/
        $builder = $this->db->table('Equipment')->select(
            "ID,Object,Manufacturer,Inactive,PhotoPath,((to_days( now()) > (to_days(DateRN) - $config->equipment_service_warning))
OR (to_days( now()) > (to_days(O2ServiceDate) - $config->equipment_service_warning)))
AND (Inactive = 'False')
AS Service",
            false
        );
        //dd($builder->getCompiledSelect());
        return $builder;
    }

    public function get($ID)
    {
        return $this->asArray()
            ->where(['ID' => $ID])
            ->first();
    }
}