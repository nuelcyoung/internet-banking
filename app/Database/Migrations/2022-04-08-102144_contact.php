<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration{
    public function up(){

        // Uncomment below if want config
        $this->forge->addField([
        		'id'          		=> [
        				'type'           => 'INT',
        				'unsigned'       => TRUE,
        				'auto_increment' => TRUE
        		],
        		'title'       		=> [
        				'type'           => 'TEXT',
        		],
                'subtitle'       		=> [
                    'type'           => 'TEXT',
                ],
                'address'       		=> [
                    'type'           => 'TEXT',
                ],
                'email'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '200',
            ],
            'phone'       		=> [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'show'       		=> [
            'type'           => 'INT',
            'constraint'     => '3',
    ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('contact');
    }

    public function down(){
        $this->forge->dropTable('contact');
    }
}