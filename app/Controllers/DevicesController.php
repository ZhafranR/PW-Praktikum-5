<?php

namespace App\Controllers;

use App\Models\BuatModel;

class DevicesController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new BuatModel();
    }

    public function index()
    {
        $data = [
            'device'=>$this->model->findAll()
        ];
        echo view('DevicesController\device', $data);
    }

}
