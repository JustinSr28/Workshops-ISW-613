<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
    $this->forge->addField([
    'id'          => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
    'first_name'  => ['type' => 'VARCHAR', 'constraint' => '100'],
    'last_name'   => ['type' => 'VARCHAR', 'constraint' => '100'],
    'email'       => ['type' => 'VARCHAR', 'constraint' => '150'],
    'idCarrer'    => ['type' => 'INT', 'unsigned' => true],
    'created_at'  => ['type' => 'DATETIME', 'null' => true],
    'updated_at'  => ['type' => 'DATETIME', 'null' => true],
    ]);


        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('idCarrer', 'carreras', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('estudiantes');
    }

    public function down()
    {
        $this->forge->dropTable('estudiantes');
    }
}
