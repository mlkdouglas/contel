<?php

class Mastermembership extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function set_user_list(){
        $users = $this->db->get('admin_user')->result();
        return $users;
    }
    public function set_user_id($id){
        $this->db->where('id',$id);
         $users = $this->db->get('admin_user')->result();
        return $users;
    }
    public function set_user_login($email,$password){
       // echo $email.$password;die();
         $this->db->where('email',$email);
         $this->db->where('password',$password);
         $user = $this->db->get('admin_user')->result();
        return $user;
    }
    public function insert_user($data){
             
       $where = "name='".$data['admin_name']."' OR email='".$data['email']."'";
        $this->db->where($where);
       
        $consulta = $this->db->get('admin_user')->result();
        
        if($consulta != null){
            echo 'Usuário ou senha já existe. Efetue o login ou clique em recuperar senha';
    }else{
         $data['admin_creationdate'] = date('Y-m-d');
            $this->db->insert('admin_user',$data);
            return $this->db->insert_id('admin_user');
    }
    }
    public function update_user($id, $data){
        $this->db->where('id',$id);
       return $this->db->update('admin_user',$data);
    }
    public function delet_user($id){
         $this->db->where('id',$id);
         return $this->db->delete('admin_user');
    }
    
}

