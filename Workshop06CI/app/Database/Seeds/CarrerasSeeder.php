<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CarrerasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['carrera' => 'Ingeniería en Software'],
            ['carrera' => 'Redes Empresariales'],
            ['carrera' => 'Gestión Ambiental'],
            ['carrera' => 'Producción Industrial'],
            ['carrera' => 'Administración de Empresas'],
        ];

        $this->db->table('carreras')->insertBatch($data);
    }
}

