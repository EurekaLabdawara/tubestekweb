<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'userID' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'namaLengkap' => array(
                'type' => 'VARCHAR',
                'constraint' => '20'
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '20'
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'vendorID' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => TRUE
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'nohp' => array(
                'type' => 'VARCHAR',
                'constraint' => '512'
            ),
            'profPic' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => TRUE
            ),
        ));
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (vendorID) REFERENCES vendors(vendorID)');
        $this->dbforge->add_key('userID', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}