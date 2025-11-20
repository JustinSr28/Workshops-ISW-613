<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrerModel extends Model
{
    protected $table = 'carreras';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    public function getAll()
    {
        return $this->findAll(); 
    }

}

