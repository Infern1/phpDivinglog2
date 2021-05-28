<?php

namespace App\Controllers;

use App\Models\DivecountryModel;
use \Hermawan\DataTables\DataTable;

use PhpParser\Node\Expr\AssignOp\Plus;

class Divecountry extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Divecountry',
            'active_menu' => 'divecountry'
        ];
        echo view('templates/header', $data);
        echo view('divecountry/overview');
        echo view('templates/footer');
    }

    public function fetch_all()
    {
        $DivecountryModel = new DivecountryModel();
        $respons = $DivecountryModel->noticeTable();

        return DataTable::of($respons)
            ->postQuery(function ($respons) {
                $respons->orderBy('Country', 'asc');
            })
            ->edit('Country', function ($row) {
                $id = $row->ID;
                $nr = $row->Country;
                return '<a href=' . base_url('divecountry/view/' . $id) . '>' . $nr . '</a>';
            })
            ->toJson(true);
    }

    public function view($ID)
    {
        $DivecountryModel = new DivecountryModel();
        $data = [
            'title' => 'Dive Country Details',
            'active_menu' => 'divecountry',
            'dive' => $DivecountryModel->get($ID)
        ];
        echo view('templates/header', $data);
        echo view('divecountry/detail', $data);
        echo view('templates/footer');
    }
}
