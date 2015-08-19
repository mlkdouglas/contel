<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('membership');
    }
    
    public function index(){
        
    }
    
    public function logar(){
        $dados = $this->input->post();
        
        $valida = $this->membership->set_user_login($dados['email'],$dados['password']);
        if($valida != null){
            //Gerando sessao
          
            $this->nsession->set_userdata('userinfo',array(
                 'id' => $valida->id,
                 'name' => $valida->name,
             ));
            
            /*
        foreach ($valida as $data):
            $this->nsession->set_userdata('logado',$data->id);
        echo $this->nsession->userdata('logado');
        endforeach;
             * 
             */
        }else{
           echo json_encode(1);
           
        }
        
    }
    public function logout(){
        $this->nsession->unset_userdata('userinfo');
       // $this->nsession->unset_userdata('user_data');
    }
    
    public function caduser(){
        $data = $this->input->post();
        
       // $consulta = $this->membership->
         
        $insert = $this->membership->insert_user($data);
       
         if($insert != null){
            
              $this->nsession->set_userdata('logado',$insert);
        echo $this->nsession->userdata('logado');
       
        }else{
           
        }
       
         }
    
    
    
}