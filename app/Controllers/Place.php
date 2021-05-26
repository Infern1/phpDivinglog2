<?php

namespace App\Controllers;

use App\Models\PlaceModel;
use \Hermawan\DataTables\DataTable;

use PhpParser\Node\Expr\AssignOp\Plus;

class Place extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dive Places',
            'active_menu' => 'place'
        ];
        echo view('templates/header', $data);
        echo view('place/overview');
        echo view('templates/footer');
    }

    public function fetch_all()
    {
        $placeModel = new PlaceModel();
        $respons = $placeModel->noticeTable();

        return DataTable::of($respons)
            ->edit('Place', function ($row) {
                $id = $row->ID;
                $place = $row->Place;
                return '<a href=' . base_url('place/view/' . $id) . '>' . $place . '</a>';
            })
            ->toJson(true);
    }

    public function view($ID)
    {
        $placeModel = new PlaceModel();
        $data = [
            'title' => 'Dive Site Details',
            'place' => $placeModel->get($ID)
        ];
        echo view('templates/header', $data);
        echo view('place/detail', $data);
        echo view('templates/footer');
    }
}
