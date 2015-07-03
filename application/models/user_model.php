<?php
class User_model extends CI_Model{
     public function __construct() {
        parent::__construct();
        $this->load->database();
        }    
        
        
         public function user_login($email,$senha){
             $this->db->where("email",$email);
             $this->db->where("password",$senha);
           return $this->db->get('user')->result();
                   
        }
        public function user_insert($data){
           
            $data['creationdate'] = date('Y-m-d');
            $this->db->insert('user',$data);
            return $this->db->insert_id('user');
        }
        
    
}

