<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('mastermembership');
    }
    
    public function index(){
        
    }
    
    public function logar(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
       // echo $password;die();
        $valida = $this->mastermembership->set_user_login($email,$password);
       // var_dump($valida);die();
        
            //Gerando sessao
        foreach ($valida as $data):
            
            if($data != null){
            $this->nsession->set_userdata('adminlogado',$data->id);
        echo json_encode($this->nsession->userdata('adminlogado'));
       
        }else{
           echo json_encode(1);
           
        }
         endforeach;
        
    }
    public function logout(){
        $this->nsession->unset_userdata('adminlogado');
    }
    
    public function caduser(){
        $data = $this->input->post();
        
       // $consulta = $this->membership->
         
        $insert = $this->mastermembership->insert_user($data);
       
         if($insert != null){
            
              $this->nsession->set_userdata('adminlogado',$insert);
        echo $this->nsession->userdata('adminlogado');
       
        }else{
            echo 'Nenhum usuário encontrado';
        }
       
         }
    
    
    
}