<?php

class Admin extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model('not_model');
    }
    public function index() 
    {
       $data['page'] = 'home';
        $this->load->view('admin/admin_view', $data);
        
    }
    
    public function noticias() 
    {
        $this->load->library('pagination');
        $maximo = 10;
        $inicio = (!$this->uri->segment("2")) ? 0 : $this->uri->segment("3");
        $config['base_url'] = base_url('admin/noticias');
        $config['total_rows'] = $this->not_model->contaRegistros(1);
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = 'Último';
        $config['next_link'] = 'Próximo';
        $config['prev_link'] = 'Anterior';
        $this->pagination->initialize($config);   
        $data["paginacao"] =  $this->pagination->create_links();
        $data['total_result'] = $this->not_model->contaRegistros(1);
        $status=1;
        $data['not_list'] = $this->not_model->selectNoticiasList($status, $maximo,$inicio);
       
        $data['page'] = 'noticias/listar';
        $this->load->view('admin/admin_view', $data);
        
        
    }
     public function novanoticia(){
         $data['page']="noticias/novanoticia";
         $this->load->view('admin/admin_view',$data);
     }
     public function cadastrar(){
         $post = $this->input->post();
         //print_r($post);
         $this->not_model->insertNoticia($post);
         $data['dados'] = $post;
         
         $data['page']="noticias/cadastrar";
         $this->load->view('admin/admin_view',$data);
     }
     public function deletar(){
        $inicio = ($this->uri->segment("4")!="del") ? null : $this->uri->segment("3");
       // print_r($inicio);
        if($inicio != null){
            $this->not_model->deletNoticia($inicio);
        }
        $data['id'] = $this->uri->segment("3");
         $data['page']="noticias/deletar";
         $this->load->view('admin/admin_view',$data);
     
     }
    
}