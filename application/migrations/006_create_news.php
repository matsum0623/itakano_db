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
      'text' => array(
        'type' => 'TEXT',
        'constraint' => '100'
      ),
      'view_flg' => array(
        'type' => 'CHAR',
        'constraint' => '1'
      ),
      'ins_time' => array(
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
    $this->dbforge->create_table('news');
  }

  public function down() {
    $this->dbforge->drop_table('news');
  }
}