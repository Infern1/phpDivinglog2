<?php

namespace App\Controllers;

use App\Models\DivesModel;
use CodeIgniter\Controller;


class Dives extends Controller
{
    public function index()
    {
        $model = new DivesModel();
        $table = new \CodeIgniter\View\Table();


        $data = [
            'dives'  => $model->getDives(),
            'title' => 'News archive',
        ];

        //echo $table->generate($data);
        echo view('templates/header', $data);
        //echo view('dives/overview', $data);
        echo $table->generate($model->getDives());
        echo view('templates/footer', $data);
        //echo "index dives";
    }

    public function view($ID = null)
    {
        $model = new DivesModel();

        $data['dives'] = $model->getDives($ID);

        if (empty($data['dives'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the dive item: ' . $ID);
        }

        $data['title'] = $data['dives']['Place'];

        echo view('templates/header', $data);
        echo view('dives/view', $data);
        echo view('templates/footer', $data);
    }
}
