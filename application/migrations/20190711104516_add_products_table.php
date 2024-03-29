 <?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_Add_products_table extends CI_Migration
    {

        public function up()
        {
            $this->dbforge->add_field(array(
                        'id' => array(
                            'type'           => 'INT',
                            'constraint'     => '11',
                            'unsigned'       => TRUE,
                            'auto_increment' => TRUE
                        ),

                        'name' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),

                        'price' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),
                        'company_name' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),

                        'quantity' => array(
                            'type'           => 'INT',
                            'constraint'     =>'11' ,
                            'unsigned'       => TRUE,
                        ),
                        'description' => array(
                            'type'           => 'TEXT',
                            'null'           => TRUE,
                        ),
                        'date_created' =>array(
                            'type'            => 'DATETIME',
                        ),
                        'date_updated'  =>array(
                            'type'            => 'DATETIME',
                        ),
            ));

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('products');
        }

        public function down()
        {
                $this->dbforge->drop_table('products');
        }
    }
