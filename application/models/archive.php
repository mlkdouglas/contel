<?php

class Archive extends CI_Model{
     public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function ready($campo = null,$order = null,$maximo=null,$inicio=null){
       $this->db->order_by($campo,$order);
       return $this->db->get('archive',$maximo,$inicio)->result();
        
    }
      public function contaRegistros(){
            $this->db->from('archive');
           
            return $this->db->count_all_results();
            }   
    
    public function update(){
        
    }
    public function delet(){
        
    }
    public function insert($data){
        $this->db->insert('archive',$data);
        return $this->db->insert_id('archive');
        
    }
    public function ready_id($id){
        $this->db->where('id',$id);
        return $this->db->get('archive')->result();
    }
}

