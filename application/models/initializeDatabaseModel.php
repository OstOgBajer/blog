<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InitializeDatabaseModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        $this->load->dbforge();
    }

    function createPostsTable()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => FALSE
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => FALSE
            ),
            'author' => array(
                'type' =>'VARCHAR',
                'constraint' => '128',
                'null' => FALSE
            ),
            'content' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
        );

        //$this->dbforge->add_field('id');
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('slug');

        $this->dbforge->create_table('posts', TRUE);

        return TRUE;
    }
}
