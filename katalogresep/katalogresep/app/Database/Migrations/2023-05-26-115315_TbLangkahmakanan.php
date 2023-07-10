<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbLangkahmakanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'l_id' => [
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
            'langkahmakanan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('l_id');
        $this->forge->addUniqueKey('r_id');
        $this->forge->createTable('tb_langkahmakanan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_langkahmakanan');
    }
}
