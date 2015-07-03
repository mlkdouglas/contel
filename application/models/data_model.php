<?php

class Data_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->dbforge();
    }
    
    public function create_table($table,$fields,$key){
        
        $this->dbforge->add_key($key, TRUE);
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table($table, TRUE);
        if ($this->dbforge->create_table($table))
{
    echo 'Database created!';
}else{echo 'Erro ao criar tabela';}
    }
    public function add_col($table,$fields){
        $this->dbforge->add_column($table, $fields);
    }
    
    public function remove_col($table, $column_to_drop){
        $this->dbforge->drop_column($table, $column_to_drop);
    }
    
    public function change_col($table,$fields){
        $this->dbforge->modify_column($table, $fields);
    }
    
}