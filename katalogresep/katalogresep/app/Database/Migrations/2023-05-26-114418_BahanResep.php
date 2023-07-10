<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BahanResep extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'b_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'r_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'nama_bahan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('b_id');
        $this->forge->addUniqueKey('r_id');
        $this->forge->createTable('tb_bahanmakanan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_bahamakanan');
    }
}
