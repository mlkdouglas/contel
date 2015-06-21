<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('not_model');
    }
    
        public function paginacao($maximo){
        $this->load->library('pagination');
        $config['base_url'] = base_url('site/noticias');
        $config['total_rows'] = $this->not_model->contaRegistros(1);
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = 'Último';
        $config['next_link'] = 'Próximo';
        $config['prev_link'] = 'Anterior';
       return  $this->pagination->initialize($config);
       
    }
    function index() 
    {
       // echo 'teste';
        
//return $query->result_array();
        
        $data['noticias'] =  $this->not_model->selectNoticiasFature();
      
        $data['page'] = 'site/home';
        $this->load->view('site_view', $data);
    }
    
    
    function o_contel() 
    {
        $data['page'] = 'site/o-contel';
        $this->load->view('site_view', $data);
    }
    
    function atuacao() 
    {
        $data['page'] = 'site/atuacao';
        $this->load->view('site_view', $data);
    }
    
    function noticias() 
    {
        
        $this->load->library('pagination');
        $maximo = 10;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3"); 
        echo $inicio;
        $this->paginacao($maximo);
        $data["paginacao"] =  $this->pagination->create_links();
        $status="1";
        $data['not_list'] = $this->not_model->selectNoticiasList($status, $maximo,$inicio);
         $data['total_result'] = $this->not_model->contaRegistros(1);
        $data['page'] = 'site/noticias';
        $this->load->view('site_view', $data);
    }
    
    function noticia(){
        $id = $this->uri->segment("2");
        $data['noticia'] = $this->not_model->setNoticia($id);
    $data['page'] = 'site/noticia';
        $this->load->view('site_view', $data);    
    }
    
    
    
}