<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_links extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'auto_increment' => TRUE
      ),
      'seq' => array(
        'type' => 'VARCHAR',
        'constraint' => '4'
      ),
      'name' => array(
        'type' => 'VARCHAR',
        'constraint' => '200'
      ),
      'link' => array(
        'type' => 'VARCHAR',
        'constraint' => '200'
      ),
      'comment' => array(
        'type' => 'VARCHAR',
        'constraint' => '200'
      ),
      'reg_time' => array(
        'type' => 'datetime'
      ),
      'upd_time' => array(
        'type' => 'datetime'
      ),
      'del_time' => array(
        'type' => 'datetime'
      ),
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('links');
  }

  public function down() {
    $this->dbforge->drop_table('links');
  }
}