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
    public function index() 
    {
       // echo 'teste';
        
//return $query->result_array();
        
        $data['noticias'] =  $this->not_model->selectNoticiasFature();
      
        $data['page'] = 'site/home';
        $this->load->view('site_view', $data);
    }
    
    
    public function o_contel() 
    {
        $data['page'] = 'site/o-contel';
        $this->load->view('site_view', $data);
    }
    
    public function atuacao() 
    {
        $data['page'] = 'site/atuacao';
        $this->load->view('site_view', $data);
    }
    
    public function noticias() 
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
    
    public function noticia(){
        $id = $this->uri->segment("2");
        $data['noticia'] = $this->not_model->setNoticia($id);
        $data['page'] = 'site/noticia';
        $this->load->view('site_view', $data);    
    }
    
    public function contato() 
    {
        $data['page'] = 'site/contato';
        $this->load->view('site_view', $data); 
    }
    
    public function reclamar() 
    {
        $data['page'] = 'site/reclamar';
        $this->load->view('site_view', $data);
    }
    
    public function reclamarcaduser() 
    {
        $this->load->model('reclamar_model');
        $post_user['define'] = $this->input->post('define');
        $post_user['name'] = $this->input->post('name');
        $post_user['cpf'] = $this->input->post('cpf');
        $post_user['email'] = $this->input->post('email');
        $post_user['password'] = null;
        $post_user['zipcode'] = $this->input->post('zipcode');
        $post_user['address'] = $this->input->post('address');
        $post_user['state'] = $this->input->post('state');
        $post_user['birth'] = null;
        $post_user['creationdate'] = date('Y-m-d');
        $post_user['status'] = "1";
        
        $id_user = $this->reclamar_model->user_reclamacao($post_user);
        
        
        $post_reclame['protocol'] = md5($id_user);
        $post_reclame['related'] = $this->input->post('related');
        $post_reclame['complaint'] = $this->input->post('complaint');
        $post_reclame['creationdate'] = date('Y-m-d');
        $post_reclame['createdby'] = $id_user;
        
        $id_reclamacao = $this->reclamar_model->insert_reclamacao($post_reclame);
        
        $data['reclam_user'] = $this->reclamar_model->set_user($id_user);
        $data['reclamar'] = $this->reclamar_model->set_reclamacao($id_user,$id_reclamacao);
        $data['reclam'] = $data;
        json_encode("ok");
        $data['page'] = 'site/reclamarcaduser';
        $this->load->view('site_view', $data);
    }
    
    public function reclamacaoenv(){
            
    }
    
    
}