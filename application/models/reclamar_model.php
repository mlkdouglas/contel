<?php
class Reclamar_model extends CI_Model{
     public function __construct() {
        parent::__construct();
        $this->load->database();
        }    
        
        
         public function user_reclamacao($data){
            
           $this->db->insert('user',$data);
          return $this->db->insert_id('user');
                   
        }
        
         public function get_user($id_cpf){
            $this->db->where('cpf',$id_user);
            return $this->db->get('cpf')->result();
            
        }
         public function set_user($id_user){
            $this->db->where('id',$id_user);
            return $this->db->get('user')->result();
            
        }
        public function insert_reclamacao($data){
            
           $this->db->insert('complaint',$data);
           return $this->db->insert_id('complaint');
        }
        
        public function set_reclamacao($id_user,$id_recl){
            $this->db->where('createdby', $id_user);
            $this->db->where( 'id', $id_recl);
            return $this->db->get('complaint')->result();
            
        }
    
}

