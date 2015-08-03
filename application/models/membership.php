<?php

class Membership extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function set_user_list(){
        $users = $this->db->get('user')->result();
        return $users;
    }
    public function set_user_id($id){
        $this->db->where('id',$id);
         $users = $this->db->get('user')->result();
        return $users;
    }
    public function set_user_login($email,$password){
         $this->db->where('email',$email);
         $this->db->where('password',$password);
         $user = $this->db->get('user')->result();
        return $user;
    }
    public function insert_user($data){
             
       $where = "email='".$data['email']."'";
        $this->db->where($where);
       
        $consulta = $this->db->get('user')->result();
        
        if($consulta != null){
            
            $error = array(
                "0" => array('Error'=>'Usuário ou email já existe Efetue o login'),
               );
            
            
            
            echo json_encode($error[0]);
    }else{
         
         $dados  = array('name'=>$data['user_name'],'email'=>$data['email'],'creationdate' => date('Y-m-d'));
            $this->db->insert('user',$dados);
            return $this->db->insert_id('user');
    }
    }
    public function update_user($id, $data){
        $this->db->where('id',$id);
       return $this->db->update('user',$data);
    }
    public function delet_user($id){
         $this->db->where('id',$id);
         return $this->db->delete('user');
    }
    
}

