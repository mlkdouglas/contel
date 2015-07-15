<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('not_model');
        
    }
    
    private function paginacao($maximo){
        $this->load->library('pagination');
        $config['base_url'] = base_url('noticias/page/');
        $config['total_rows'] = $this->not_model->contaRegistros(1);
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = 'Último';
        $config['next_link'] = 'Próximo';
        $config['prev_link'] = 'Anterior';
       return  $this->pagination->initialize($config);
       
    }
       public function index() {       
           $data['user'] = $this->session->userdata();
           $this->load->library('pagination');
           $maximo = 3;
           $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");            
           $this->paginacao($maximo);
           $data["paginacao"] =  $this->pagination->create_links();
           $data['not_list'] = $this->not_model->selectNoticiasList($status="1", $maximo,$inicio);
           $data['page'] = 'site/noticias';
           $this->load->view('site_view', $data);  
           }
           
        public function noticia(){
        $data['user'] = $this->session->userdata();
        $id = $this->uri->segment("2");
        $data['noticia'] = $this->not_model->setNoticia($id);
        $data['page'] = 'site/noticia';
        $this->load->view('site_view', $data);    
    }
    
    
    
       
    }
    
