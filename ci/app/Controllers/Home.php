<?php

namespace App\Controllers;

use App\Models\Pakaian;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
        // $db = \Config\Database::connect();
        // $this->load->database();
        // $query = $this->db->query("SELECT * FROM pakaian");
        // dd($q);
        // $pmodel = new Pakaian();
        // $data = $pmodel->findAll();
        // dd($data);
        // echo view('index');
    }

    public function edit()
    {
        // return view('index');
        echo view('edit');
    }
}
