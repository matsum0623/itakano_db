<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_areas extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
      'area_id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'auto_increment' => TRUE
      ),
      'area_key' => array(
        'type' => 'VARCHAR',
        'constraint' => '20'
      ),
      'area_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '20'
      ),
    ));
    $this->dbforge->add_key('area_id', TRUE);
    $this->dbforge->add_key('area_key', FALSE);
    $this->dbforge->create_table('areas');
  }

  public function down() {
    $this->dbforge->drop_table('areas');
  }
}