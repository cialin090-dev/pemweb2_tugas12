<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliahModel extends Model
{
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode', 'nama_mk', 'sks'];
    protected $returnType = 'array';
}