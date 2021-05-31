<?php

namespace App\Controllers;

use App\Models\DivelogModel;
use App\Models\UrlHelper;
use Hermawan\DataTables\DataTable;

use PhpParser\Node\Expr\AssignOp\Plus;

class Divelog extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dive Log',
            'active_menu' => 'divelog',
        ];
        echo view('templates/header', $data);
        echo view('divelog/overview');
        echo view('templates/footer');
    }

    public function fetch_all()
    {
        $divelogModel = new DivelogModel();
        $respons = $divelogModel->noticeTable();

        return DataTable::of($respons)
            ->postQuery(function ($respons) {
                $respons->orderBy('Number', 'desc');
            })
            ->edit('Number', function ($row) {
                $id = $row->ID;
                $nr = $row->Number;
                return '<a href=' . base_url('divelog/view/' . $id) . '>' . $nr . '</a>';
            })
            ->toJson(true);
    }

    public function view($ID)
    {
        $divelogModel = new DivelogModel();
        $data = [
            'title' => 'Dive Log Details',
            'active_menu' => 'divelog',
            'dive' => $divelogModel->get($ID),
        ];
        echo view('templates/header', $data);
        echo view('divelog/detail', $data);
        echo view('templates/footer');
    }
}