<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transportasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
				'auto_increment' => true
            ],
            'jenis_transportasi' => [
                'type'           => 'VARCHAR',
				'constraint'     => 255
            ],
            'rute_awal'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'rute_akhir'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'slot'               => [
                'type'           => 'INT',
                'constraint'     => '255'
            ],
            'jadwal'             => [
                'type'           => 'DATE'
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('transportasi', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('transportasi');
    }
}
