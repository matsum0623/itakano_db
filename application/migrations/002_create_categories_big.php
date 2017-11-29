<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_categories_big extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
      'big_id' => array(
        'type' => 'CHAR',
        'constraint' => '2'
      ),
      'big_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '20'
      ),
    ));
    $this->dbforge->add_key('big_id', TRUE);
    $this->dbforge->create_table('categories_big');
  }

  public function down() {
    $this->dbforge->drop_table('categories_big');
  }
}