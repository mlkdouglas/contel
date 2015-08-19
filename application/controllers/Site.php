<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    protected $controlpath = 'site/site_view';
    
    public function __construct() {
        parent::__construct();
        $this->load->model('membership');
    }
    
    public function index(){
        //var_dump($_SESSION['userinfo']);
        $data = array(       
            'user_dados' => @$_SESSION['userinfo'],
           'body' => 'home', 
            'reclamar_button'=>'<a class="btn btn-green btn-mod-3 " href="'.base_url('reclamar').'">Reclamar</a>',
            'navtop' =>array(
                0 => '<a href="'.base_url('o-contel').'" >CONTEL</a>',
                1 => '<a href="'.base_url('consulta').'" >CONSULTA</a>',
                2 => '<a href="'.base_url('denuncias').'" >DENUNCIAS</a>',
                3 => '<a href="'.base_url('associe-se').'" >ASSOCIE-SE</a>',
                4 => '<a href="'.base_url("#contato").'" >CONTATO</a>',
                
            ),
            'btnlogin' => (!@$_SESSION['userinfo'])?array('<button class="btn btn-mod btn-green btn-logar"><i class="fa fa-user"></i> Ja possui uma conta? clique aqui!</button>'):array(
                '<div class="btn-group "> '
                . '<button type="button" class="btn btn-green dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                . '<span class="loader-user"></span><span class="fa fa-user"></span> Olá '.$_SESSION['userinfo']['name'].' <span class="caret"></span>'
                . '</button><ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">'
                . '<li><a href="'.base_url('useraccount/').'">Minha Conta</a></li>'
                . '<li><a href="#" id="logout">Sair </a></li>'
                . '</ul>'
                . '</div>'),
            'noticias_index' => $this->noticias_index(),
        );
        
        
        
       $this->load->view($this->controlpath, $data);
    }
    
    
    
    private function noticias_index(){
        $this->load->model('noticias'); 
        $news = $this->noticias->set_not_list(1,'news.creationdate','DESC');
        
     return $news;
        
    }
    
    
    public function o_contel() 
    {
        echo 'o contel';
    }
    
}
