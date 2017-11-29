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
      'name' => array(
        'type' => 'VARCHAR',
        'constraint' => '200'
      ),
      'area_id' => array(
        'type' => 'VARCHAR',
        'constraint' => '20',
      ),
      'big_id' => array(
        'type' => 'CHAR',
        'constraint' => '2'
      ),
      'med_id' => array(
        'type' => 'CHAR',
        'constraint' => '2'
      ),
      'sml_id' => array(
        'type' => 'CHAR',
        'constraint' => '2'
      ),
      'name_kana' => array(
        'type' => 'VARCHAR',
        'constraint' => '200'
      ),
      'address' => array(
        'type' => 'VARCHAR',
        'constraint' => '200'
      ),
      'open_time' => array(
        'type' => 'VARCHAR',
        'constraint' => '10'
      ),
      'close_time' => array(
        'type' => 'VARCHAR',
        'constraint' => '10'
      ),
      'url' => array(
        'type' => 'VARCHAR',
        'constraint' => '200'
      ),
      'comment' => array(
        'type' => 'TEXT',
        'constraint' => '1000'
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
    $this->dbforge->create_table('spots');
  }

  public function down() {
    $this->dbforge->drop_table('spots');
  }
}