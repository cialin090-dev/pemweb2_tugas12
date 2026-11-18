<?php

namespace App\Controllers;

use App\Models\MataKuliahModel;

class MataKuliah extends BaseController
{
    public function index()
    {
        $model = new MataKuliahModel();

        return view('matakuliah/index', [
            'title'      => 'Data Mata Kuliah',
            'matakuliah' => $model->orderBy('kode', 'ASC')->findAll()
        ]);
    }
}