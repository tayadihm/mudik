<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penumpang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
				'auto_increment' => true
            ],
            'id_transport'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'nama' => [
                'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'jumlah_tiket'       => [
                'type'           => 'INT',
                'constraint'     => '255'
            ],
            'phone'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_transport', 'transportasi', 'id');
        $this->forge->createTable('penumpang', true);
    }

    public function down()
    {
        $this->forge->dropTable('penumpang');
    }
}
