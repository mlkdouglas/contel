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
        $this->db->where('id_user',$id);
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
             
       $where = "user_name='".$data['user_name']."' OR email='".$data['email']."'";
        $this->db->where($where);
       
        $consulta = $this->db->get('user')->result();
        
        if($consulta != null){
            echo 'Usuário ou senha já existe. Efetue o login ou clique em recuperar senha';
    }else{
         $data['creationdate'] = date('Y-m-d');
            $this->db->insert('user',$data);
            return $this->db->insert_id('user');
    }
    }
    public function update_user($id, $data){
        $this->db->where('id_user',$id);
       return $this->db->update('user',$data);
    }
    public function delet_user($id){
         $this->db->where('id_user',$id);
         return $this->db->delete('user');
    }
    
}

