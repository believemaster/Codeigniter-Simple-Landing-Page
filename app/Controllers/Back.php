<?php namespace App\Controllers;
use App\Models\loginModel;
use App\Models\contactModel;

class Back extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/login');
        echo view('templates/footer');
    }

    public function login()
    {
        return redirect()->to('/list');
    }

    public function list()
    {
        $model = new contactModel();

        $data = [
                'contact'  => $model->findAll(),
        ];

        echo view('templates/header');
        echo view('pages/list', $data);
        echo view('templates/footer');
    }
}