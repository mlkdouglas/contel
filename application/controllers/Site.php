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
        $post_user = array(
            'define'=>  $this->input->post('define'),
            'user_name'=> $this->input->post('name'),
            'cpf' => $this->input->post('cpf'),
            'email' => $this->input->post('email'),
            'password' => null,
            'zipcode' => $this->input->post('zipcode'),
            'address'=> $this->input->post('address'),
            'state' => $this->input->post('state'),
            'birth' => null,
            'creationdate'=> date('Y-m-d'),
            'status' => "1"
            );
        $consulta_cpf = $this->reclamar_model->get_user($post_user['cpf'],$post_user['email']);
        
        $id_user = (!$consulta_cpf)?$id_user = $this->reclamar_model->user_reclamacao($post_user):$consulta_cpf['0']->id_user;        
       
        $post_reclame = array(
            'protocol' => rand(1,99999).$id_user, //Gera numero de protocolo aleatório e adiciona id do usuário
            'related' => $this->input->post('related'),
       'complaint' => $this->input->post('complaint'),
        'creationdate' => date('Y-m-d'),
       'createdby'=> $id_user,
            'status' =>'1',
            'fortreaty' => '1'
        );        
        
        $consulta_protocolo = $this->reclamar_model->get_reclamacao_validar($post_reclame['protocol']); 
        if($consulta_protocolo != null){           
           //inicia o loop
           $i = 0;}else{ 
               //Termina o loop
               $i = 1;}
           
      for( $i = 0; $i <= 0; $i++ ){
          //Gera novo numero de protocolo
          $post_reclame['protocol'] = rand(1,99999).$id_user;                 
          }                
          //Insere reclamação com novo numero de protocolo       
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
    
    //Consulta de protocolos
    
    public function consultaprotocolo(){
        $this->load->model('reclamar_model'); 
        $protocol = $this->input->post('protocol');
       
        $data['n_protocolo'] = $this->reclamar_model->set_reclamacao_protocol($protocol);
        $id_complaint = $data['n_protocolo']['0'];             
        
        $data['comentarios'] = (!$this->reclamar_model->set_coment_complaint($id_complaint->complaint_id))?null:$this->reclamar_model->set_coment_complaint($id_complaint->complaint_id);
        
        $id_coment_complaint = (!$data['comentarios']['0'])?null:$data['comentarios']['0']->id;
                
        $data['coment_parent'] = (!$this->reclamar_model->set_replic_coment($id_coment_complaint))?null:$this->reclamar_model->set_replic_coment($id_coment_complaint);
       
        $data['page'] = 'site/consultaprotocolo';
        $this->load->view('site_view', $data);
    }
    
    
}