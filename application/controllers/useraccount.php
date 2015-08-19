<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useraccount extends CI_Controller {
    protected $controlpath = 'site/site_view';
    
    public function __construct() {
        parent::__construct();
        $this->load->model('membership');
        
        if (!isset($_SESSION['userinfo']) || $_SESSION['userinfo'] == null) header("Location: home");
    }
    
    public function index(){
         $session = $this->nsession->userdata('logado');
        $user_dados = $this->membership->set_user_id($session);
        $data = array(       
            'user_dados' => $user_dados,
           'body' => 'useraccount', 
            'reclamar_button'=>'<a class="btn btn-green btn-mod-3 " href="'.base_url('reclamar').'">Reclamar</a>',
            'navtop' =>array(
                0 => '<a href="'.base_url().'" >CONTEL</a>',
                1 => '<a href="'.base_url().'" >CONSULTA</a>',
                2 => '<a href="'.base_url().'" >DENUNCIAS</a>',
                3 => '<a href="'.base_url().'" >ASSOCIE-SE</a>',
                4 => '<a href="'.base_url("#contato").'" >CONTATO</a>',
                
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
            
        );
        
       $this->load->view($this->controlpath, $data);
    }
    
    
}