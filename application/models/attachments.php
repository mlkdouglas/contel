<?php

class Attachments extends CI_Model{
     public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function ready($campo = null,$order = null,$maximo=null,$inicio=null){
       $this->db->order_by($campo,$order);
       return $this->db->get('attachments',$maximo,$inicio)->result();
        
    }
      public function contaRegistros(){
            $this->db->from('attachments');
           
            return $this->db->count_all_results();
            }   
    
    public function update(){
        
    }
    public function delet(){
        
    }
    public function insert($data){
        $this->db->insert('attachments',$data);
        return $this->db->insert_id('attachments');
        
    }
    public function ready_id($id){
        $this->db->where('id',$id);
        return $this->db->get('archive')->result();
    }
}

