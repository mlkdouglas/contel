<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('not_model');
    }
    function index() 
    {
       // echo 'teste';
        
//return $query->result_array();
        
        $data['noticias_cons'] =  $this->not_model->selectNoticiasFature();
      
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
        $maximo = 1;
        $inicio = (!$this->uri->segment("2")) ? 0 : $this->uri->segment("2");
        $config['base_url'] = base_url('noticias');
        $config['total_rows'] = $this->not_model->contaRegistros(1);
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = 'Último';
        $config['next_link'] = 'Próximo';
        $config['prev_link'] = 'Anterior';
        $this->pagination->initialize($config);   
        $data["paginacao"] =  $this->pagination->create_links();
       
        $status="1";
        $data['not_list'] = $this->not_model->selectNoticiasList($status, $maximo,$inicio);
         $data['total_result'] = $this->not_model->contaRegistros(1);
        $data['page'] = 'site/noticias';
        $this->load->view('site_view', $data);
    }
    
    
    
}