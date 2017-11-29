<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_categories_medium extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
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
      'sml_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '20'
      ),
    ));
    $this->dbforge->add_key('big_id', TRUE);
    $this->dbforge->add_key('med_id', TRUE);
    $this->dbforge->add_key('sml_id', TRUE);
    $this->dbforge->create_table('categories_small');
  }

  public function down() {
    $this->dbforge->drop_table('categories_small');
  }
}