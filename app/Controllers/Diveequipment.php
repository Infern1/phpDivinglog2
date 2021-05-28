<?php

namespace App\Controllers;

use App\Models\DiveequipmentModel;
use Hermawan\DataTables\DataTable;

use PhpParser\Node\Expr\AssignOp\Plus;

class Diveequipment extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dive Log',
            'active_menu' => 'diveequipment',
        ];
        echo view('templates/header', $data);
        echo view('diveequipment/overview');
        echo view('templates/footer');
    }

    public function fetch_all()
    {
        $DiveequipmentModel = new DiveequipmentModel();
        $respons = $DiveequipmentModel->noticeTable();

        return DataTable::of($respons)
            ->postQuery(function ($respons) {
                $respons->orderBy('Object', 'asc');
            })
            ->edit('Object', function ($row) {
                $id = $row->ID;
                $nr = $row->Object;
                return '<a href=' .
                    base_url('diveequipment/view/' . $id) .
                    '>' .
                    $nr .
                    '</a>';
            })
            ->toJson(true);
    }

    public function view($ID)
    {
        $DiveequipmentModel = new DiveequipmentModel();
        $data = [
            'title' => 'Dive Equipment Details',
            'active_menu' => 'Diveequipment',
            'dive' => $DiveequipmentModel->get($ID),
        ];
        echo view('templates/header', $data);
        echo view('diveequipment/detail', $data);
        echo view('templates/footer');
    }
}