<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_links extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
      'user_id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'auto_increment' => TRUE
      ),
      'user_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),
      'password' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
    ));
    $this->dbforge->add_key('user_id', TRUE);
    $this->dbforge->add_key('user_name', FALSE);
    $this->dbforge->create_table('users');
  }

  public function down() {
    $this->dbforge->drop_table('users');
  }
}