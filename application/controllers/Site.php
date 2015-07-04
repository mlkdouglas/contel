<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
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
        $data['user'] = $this->session->userdata();
       // echo 'teste';
        
//return $query->result_array();
        
        $data['noticias'] =  $this->not_model->selectNoticiasFature();
      
        $data['page'] = 'site/home';
        $this->load->view('site_view', $data);
    }
    
    
    public function o_contel() 
    {
        $data['user'] = $this->session->userdata();
        $data['page'] = 'site/o-contel';
        $this->load->view('site_view', $data);
    }
    
    public function atuacao() 
    {
        $data['user'] = $this->session->userdata();
        $data['page'] = 'site/atuacao';
        $this->load->view('site_view', $data);
    }
    
    public function noticias() 
    {
        $data['user'] = $this->session->userdata();
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
        $data['user'] = $this->session->userdata();
        $id = $this->uri->segment("2");
        $data['noticia'] = $this->not_model->setNoticia($id);
        $data['page'] = 'site/noticia';
        $this->load->view('site_view', $data);    
    }
    
    public function contato() 
    {
        $data['user'] = $this->session->userdata();
        $data['page'] = 'site/contato';
        $this->load->view('site_view', $data); 
    }
    
    public function reclamar($cadastro = null) 
    {
        $data['user'] = $this->session->userdata();
        $session_id = $this->session->userdata('name');
       // var_dump($session_id);
       $data['page'] = 'site/reclamar';
      
       
       // $data['page'] = 'site/reclamar';
        $this->load->view('site_view', $data);
        
    }
    
    public function reclamarcad()  {
        $data['user'] = $this->session->userdata();
        $this->load->model('reclamar_model');         
        $this->load->model('user_model');         
        
        $user_insert = array(
            'define' => $this->input->post('define'),
            'user_name' => $this->input->post('user_name'),
            'cpf_cnpj' => $this->input->post('cpf_cnpj'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'zipcode' => $this->input->post('zipcode'),
            'address' => $this->input->post('address'),
            'number' => $this->input->post('number'),
            'complement' => $this->input->post('complement'),
            'state' => $this->input->post('state'),
        );
        
        $id_user = $this->reclamar_model->user_reclamacao($user_insert);
        json_encode('ok');
       
        $rand = rand(1,99999);
        $protocolo = $rand.trim($id_user);
       // echo $protocolo;exit;
        $post_reclame = array(
            'protocol' => $protocolo, //Gera numero de protocolo aleatório e adiciona id do usuário
            'related' => $this->input->post('related'),
       'complaint' => $this->input->post('complaint'),
        'creationdate' => date('Y-m-d'),
       'createdby'=> $this->input->post('createdby'),
       'createdby'=> $id_user,
            'status' =>'1'            
        ); 
       
             
        $consulta_protocolo = $this->reclamar_model->get_reclamacao_validar($post_reclame['protocol']); 
        if($consulta_protocolo != null){  $i = 0;}else{ $i = 1;}           
        for( $i = 0; $i <= 0; $i++ ){
            //Gera novo numero de protocolo
            $rand = rand(1,99999);
          $post_reclame['protocol'] =  $rand.trim($id_user);                 
          }                
          //Insere reclamação com novo numero de protocolo       
        $id_reclamacao = $this->reclamar_model->insert_reclamacao($post_reclame); 
       // var_dump($id_reclamacao);exit;
     // $data['reclamar'] = $this->reclamar_model->set_reclamacao($id_user,$id_reclamacao);
        $data['reclam'] = $this->session->set_flashdata('reclamacao', $rec->complaint_id );
        json_encode("ok");
        foreach ($data['reclamar'] as $rec){
        $this->session->set_flashdata('reclamacao', $rec->complaint_id );
        }
        
        
    }
    
    public function reclamacaoenv(){
        $this->load->model('reclamar_model');
            $data['user'] = $this->session->userdata();
             
            var_dump($this->session->flashdata('reclamacao'));exit;
            $data['reclamar'] = $this->reclamar_model->get_reclamacao_id($flash);
           //var_dump($data);exit;
             $data['reclam'] = $data;
             $data['page'] = 'site/reclamacaoenv';
        $this->load->view('site_view', $data);
    }
    
    //Consulta de protocolos
    
    public function consultaprotocolo(){
        $data['user'] = $this->session->userdata();
        $this->load->model('reclamar_model'); 
        $protocol = $this->input->post('protocol');
       
        $data['n_protocolo'] = $this->reclamar_model->set_reclamacao_protocol($protocol);
        $id_complaint = ($data['n_protocolo']!= null)?$data['n_protocolo']['0']->complaint_id:null;             
       
       // var_dump($id_complaint); exit;
        $data['comentarios'] = ($this->reclamar_model->set_coment_complaint( $id_complaint  )!= null)?$this->reclamar_model->set_coment_complaint( $id_complaint  ):"";
        
        $id_coment_complaint = ($data['comentarios']==null)?null:$data['comentarios']['0']->id;
                
        $data['coment_parent'] = (!$this->reclamar_model->set_replic_coment($id_coment_complaint))?null:$this->reclamar_model->set_replic_coment($id_coment_complaint);
       
       $data['user'] = $this->session->userdata();
        $session_id = $this->session->userdata('name');
       // var_dump($session_id);
       $data['page'] = 'site/consultaprotocolo';
        $this->load->view('site_view', $data);
    }
    
    public function logar(){
        $data['user'] = $this->session->userdata();
        $this->load->model('user_model');
        $email = $this->input->post('email');
        $senha = md5($this->input->post('password'));
        $consulta_user = $this->user_model->user_login($email, $senha);
       
        if($consulta_user == null){
            $this->session->sess_destroy();
           echo 'Usuário ou senha inválidos';
           
            }else{
         foreach ($consulta_user as $user):
             $user_data = array('name'=>$user->user_name,'id'=>$user->id_user,'define'=>$user->define, 'status'=>$user->status);
         $this->session->set_userdata($user_data);
         redirect(base_url('reclamar'));
         //var_dump($this->session->userdata); 
                  
         endforeach;
            }
      
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('reclamar'));
    }
    
    public function cad_user(){
        $data['user'] = $this->session->userdata();
        $this->load->model('user_model');
         $post_user = array(
            'define'=>  $this->input->post('define'),
            'user_name'=> $this->input->post('user_name'),
            'cpf' => $this->input->post('cpf'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'zipcode' => $this->input->post('zipcode'),
            'address'=> $this->input->post('address'),
            'state' => $this->input->post('state'),
            'birth' => null,
            'creationdate'=> date('Y-m-d'),
            'status' => "1"
            );
        
       $this->user_model->user_insert($post_user);
       
             return  $this->reclamar('1');
        
        }
        
    }
