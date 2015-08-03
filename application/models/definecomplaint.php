<?php
class Definecomplaint extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function insert_define($data){
        $this->db->insert('define_complaint',$data);
        return $this->db->insert_id('define_complaint');
        
    }
}