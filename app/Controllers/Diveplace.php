<?php

namespace App\Controllers;

use App\Models\DiveplaceModel;
use Hermawan\DataTables\DataTable;

class Diveplace extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dive Places',
            'active_menu' => 'diveplace',
        ];
        echo view('templates/header', $data);
        echo view('diveplace/overview');
        echo view('templates/footer');
    }

    public function fetch_all()
    {
        $placeModel = new DiveplaceModel();
        $respons = $placeModel->noticeTable();

        return DataTable::of($respons)
            ->edit('Place', function ($row) {
                $id = $row->ID;
                $diveplace = $row->Place;
                return '<a href=' .
                    base_url('diveplace/view/' . $id) .
                    '>' .
                    $diveplace .
                    '</a>';
            })
            ->postQuery(function ($respons) {
                $respons->orderBy('Logbook.Country', 'asc');
            })
            ->toJson(true);
    }

    public function view($ID)
    {
        $placeModel = new DiveplaceModel();
        $data = [
            'title' => 'Dive Site Details',
            'active_menu' => 'diveplace',
            'diveplace' => $placeModel->get($ID),
        ];
        echo view('templates/header', $data);
        echo view('diveplace/detail', $data);
        echo view('templates/footer');
    }
}