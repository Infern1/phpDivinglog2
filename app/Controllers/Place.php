<?php

namespace App\Controllers;

use App\Models\PlaceModel;
use monken\TablesIgniter;

use PhpParser\Node\Expr\AssignOp\Plus;

class Place extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dive Places',
        ];
        //echo view('templates/header', $data);
        echo view('place/overview');        
        //echo view('templates/footer');
    }

    public function fetch_all()
    {
        $placeModel = new PlaceModel();
        $data_table = new TablesIgniter();
        $data_table->setTable($placeModel->noticeTable())
            ->setDefaultOrder('ID', 'DESC')    
            ->setSearch(['Place', 'Comments'])
            ->setOrder(['ID'])
            ->setOutput(['ID', 'Place', 'Comments']);

        return $data_table->getDatatable();
    }

    public function view($ID)
    {
        $placeModel = new PlaceModel();
        

        $data = [
            'title' => 'Dive Details',
            'place' =>$placeModel->getPlace($ID)
        ];
        echo view('templates/header', $data);
        echo view('place/detail', $data);        
        echo view('templates/footer');
        

    }
}
