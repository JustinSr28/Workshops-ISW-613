<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'estudiantes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['first_name', 'last_name', 'email', 'idCarrer'];
    protected $useTimestamps = true;



    public function getStudentsWithCareer()
    {
        return $this->db->table('estudiantes')
            ->select('estudiantes.*, carreras.carrera')
            ->join('carreras', 'carreras.id = estudiantes.idCarrer')
            ->get()
            ->getResultArray();
    }

}