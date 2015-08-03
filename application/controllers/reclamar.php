<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclamar extends CI_Controller {
    protected $controlpath = 'site/site_view';
    
    public function __construct() {
        parent::__construct();
        $this->load->model('membership');
         $this->load->model('complaint');
         $this->load->model('definecomplaint');
        
    }
    
    public function index(){
        $session = $this->nsession->userdata('logado');
        $user_dados = $this->membership->set_user_id($session);
        
        $data = array(       
            'user_dados' => $user_dados,
           'body' => 'reclamar', 
            'reclamar_button'=>'<a class="btn btn-green btn-mod-3 " href="'.base_url('reclamar').'">Reclamar</a>',
            'navtop' =>array(
                0 => '<a href="'.base_url().'" class="color-white">CONTEL</a>',
                1 => '<a href="'.base_url().'" class="color-white">CONSULTA</a>',
                2 => '<a href="'.base_url().'" class="color-white">DENUNCIAS</a>',
                3 => '<a href="'.base_url().'" class="color-white">ASSOCIE-SE</a>',
                4 => '<a href="'.base_url("#contato").'" class="color-white">CONTATO</a>',
                
            ),
            'btnlogin' => (!$session)?array(''):array(
                '<div class="btn-group "> '
                . '<button type="button" class="btn btn-green dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                . '<span class="loader-user"></span><span class="fa fa-user"></span> Olá '.$user_dados[0]->name.' <span class="caret"></span>'
                . '</button><ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">'
                . '<li><a href="'.base_url('useraccount/').'">Minha Conta</a></li>'
                . '<li><a href="#" id="logout">Sair </a></li>'
                . '</ul>'
                . '</div>'),
            'define_complaint'=>  $this->complaint->define_complaint(),
           
        );
       
       $this->load->view($this->controlpath, $data);
    }
    
    public function insert_complaint(){
         $session = $this->nsession->userdata('logado');
        $user_dados = $this->membership->set_user_id($session);
        
        $id_user = $user_dados[0]->id;
        $rand = rand(1,99999);
        $protocolo = $rand.trim($id_user);
        $def = $this->input->post('define');
        $outros = $this->input->post('define-outros');
        
        $define = ($def == 5)?$this->definecomplaint->insert_define(array('title'=> $outros)):$def;
       // echo $protocolo;exit;
        $post_reclame = array(
            'protocol' => $protocolo, //Gera numero de protocolo aleatório e adiciona id do usuário
            'related' => $define,
       'complaint' => $this->input->post('rec'),
        'creationdate' => date('Y-m-d'),
       'createdby'=> $this->input->post('createdby'),
       'createdby'=> $id_user,
            'status' =>'1'            
        ); 
       
        $insert_complaint = $this->complaint->insert_complaint($post_reclame);
        if(!$insert_complaint){
            echo "Não foi possivel cadastrar sua reclamação";
        }else{
            $this->nsession->set_userdata('complaint',$insert_complaint);
            json_encode(redirect(base_url('reclamar/complaint_success')));
        }
        
        
        }
    public function complaint_success(){
            $id_complaint = $this->nsession->userdata('complaint');
            $session = $this->nsession->userdata('logado');
        $user_dados = $this->membership->set_user_id($session);
        
        $data = array(       
            'user_dados' => $user_dados,
           'body' => 'recsuccess', 
            'reclamar_button'=>'<a class="btn btn-green btn-mod-3 " href="'.base_url('reclamar').'">Reclamar</a>',
            
            'navtop' =>array(
                0 => '<a href="'.base_url().'" class="color-white">CONTEL</a>',
                1 => '<a href="'.base_url().'" class="color-white">CONSULTA</a>',
                2 => '<a href="'.base_url().'" class="color-white">DENUNCIAS</a>',
                3 => '<a href="'.base_url().'" class="color-white">ASSOCIE-SE</a>',
                4 => '<a href="'.base_url("#contato").'" class="color-white">CONTATO</a>',
                
            ),
            'btnlogin' => (!$session)?array('<button class="btn btn-mod btn-green btn-logar"><i class="fa fa-user"></i> Ja possui uma conta? clique aqui!</button>'):array(
                '<div class="btn-group "> '
                . '<button type="button" class="btn btn-green dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                . '<span class="loader-user"></span><span class="fa fa-user"></span> Olá '.$user_dados[0]->name.' <span class="caret"></span>'
                . '</button><ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">'
                . '<li><a href="'.base_url('useraccount/').'">Minha Conta</a></li>'
                . '<li><a href="#" id="logout">Sair </a></li>'
                . '</ul>'
                . '</div>'),
            'complaint' => $this->complaint->set_complaint_id($id_complaint),
           
           
        );
       
       $this->load->view($this->controlpath, $data);
            
        }
        
        public function protocolo(){
            $data = $this->input->post('protocol');
          // $protocol = $this->nsession->set_userdata('protocol',$data);
           //echo $this->nsession->userdata('protocol');die();
           $complaint = $this->complaint->set_complaint_protocol($data);
           //var_dump($complaint);die();
           if (!$complaint){
               $error = array(
                   '0'=>array( 'Error' => "Nenhum protocolo encontrado")
               );
               echo json_encode($error[0]);
           }else{
                $error = array(
                   '0'=>array( 'Success' => "Encontrado")
               );
               
                echo json_encode($error[0]);
           } 
        }
}
    