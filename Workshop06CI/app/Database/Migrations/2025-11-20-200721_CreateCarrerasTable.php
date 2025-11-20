<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCarrerasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'carrera' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('carreras');
    }

    public function down()
    {
        $this->forge->dropTable('carreras');
    }
}
