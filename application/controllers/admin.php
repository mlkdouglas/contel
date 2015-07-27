<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    protected $controlpath = 'admin/admin_view';
    private $session;
    private $user_data;
    public function __construct() {
        parent::__construct();
        $this->load->model('mastermembership');
         $this->session = $this->nsession->userdata('adminlogado');
         $this->user_data = $this->mastermembership->set_user_id($this->session);
    }
    
     protected function paginacao($maximo,$status = null,$tabela){
        $this->load->library('pagination'); //Carrega a biblioteca pagination CI
        $config['base_url'] = base_url('admin/novanoticia'); //Url Base da página
        $config['total_rows'] = $this->$tabela->contaRegistros($status); // Conta total de resultados Ativos ou Inativos "1 - Ativo / 0 - Inativo"
        $config['per_page'] = $maximo; //Conta o valor maximo por página
        $config['first_link'] = 'Primeiro'; //Cria menu de navegação de páginas
        $config['last_link'] = 'Último';//Cria menu de navegação de páginas
        $config['next_link'] = 'Próximo';//Cria menu de navegação de páginas
        $config['prev_link'] = 'Anterior';//Cria menu de navegação de páginas
        return  $this->pagination->initialize($config); //Inicia a paginação
        }
        
    
    private function navtop($method = null){
      //  print_r($method);die();
        return array(       
            'title' => 'Contel - DASHBOARD',
            'user_dados' => $this->user_data,
            
           'body' => (!$method)?'home':$method, 
            'navtop' =>array(
                0 => '<a href="'.base_url('admin/').'"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>',
                1 => '<a href="'.base_url('admin/user_admin').'"><i class="fa fa-fw fa-bar-chart-o"></i> Membros</a>',
                2 => '<a href="'.base_url('admin/noticias').'"><i class="fa fa-fw fa-table"></i> Noticias</a>',
                3 => '<a href="'.base_url('admin/enquetes').'"><i class="fa fa-fw fa-edit"></i> Enquetes</a>',
                4 => '<a href="'.base_url('admin/reclamacao').'"><i class="fa fa-fw fa-desktop"></i> Reclamações</a>',
                
            ),
            
            'btnlogin' => (!$this->session)?array(
                ):
                array(
                '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> '.$this->user_data[0]->name.' <b class="caret"></b></a> <ul class="dropdown-menu">',
                '<li><a href="#"><i class="fa fa-fw fa-user"></i> Profile</a></li>',
                '<li> <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a></li>',
                '<li><a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a></li>',
                '<li class="divider"></li>',
                '<a href="#" class="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>',
                '</ul></li>',
            ),
                
            
        );
        
    }


    public function index(){
       $data = $this->navtop('home');
      
        if($this->session != null){
             $this->load->view($this->controlpath, $data);
           
        }else{
       $this->load->view('includers/admin/login_view');
        }
    }
    
   public function noticias(){
       $this->load->model('noticias');
       $data = $this->navtop('noticias/noticialist');
       $data['noticia_list_published'] = $this->noticias->set_not_list(1);
       $data['noticia_list_inative'] = $this->noticias->set_not_list(2);
       $data['noticia_list_remove'] = $this->noticias->set_not_list(3);
      
       if($this->session != null){
             $this->load->view($this->controlpath, $data);
           
        }else{
       $this->load->view('includers/admin/login_view');
        }
   }
   public function novanoticia(){
       $this->load->model('noticias');
       $this->load->model('archive');
       $data = $this->navtop('noticias/novanoticia');
       $data['archive'] = $this->archive->ready(null,null,10,0);
     
       
       if($this->session != null){
             $this->load->view($this->controlpath, $data);
           
        }else{
       $this->load->view('includers/admin/login_view');
        }
      
   }
   public function news_cad(){
       $this->load->model('noticias');
       $this->load->model('attachments');
       $title = $this->input->post('title');                 
         $slug = strtolower(preg_replace('/[ -]+/' , '-' , $title));
       $data['insert_not'] = array(
           "title"=>$this->input->post('title'),
           "slug"=>$slug,
           "link_reference"=>$this->input->post('link_reference'),
           "description"=>$this->input->post('description'),
           "news"=>$this->input->post('news'),
           "creationdate"=>$this->input->post('creationdate'),
           //"modifieddate"=>date('Y-m-d H:i:s'),
           "published"=>$this->input->post('published'),
           "fature"=>$this->input->post('fature'),
           "createby"=>$this->input->post('createby'),
           "tabledef"=> 'news'
          
       );
       
       $not_insert = $this->noticias->insert_not($data['insert_not']);
       $data['archive']= array(
           'parent_id' => $not_insert,
           'archive_id' => $this->input->post('id_arquive'),
           'tabledef' => $this->input->post('tabledef'),
           'fature' => 1,
           'creationdate' => $this->input->post('creationdate'),
           //'modifieddate' => date('Y-m-d H:i:s'),
           "tabledef"=> 'news'
           );
       $this->attachments->insert($data['archive']);
      
      echo "ok";
      }
   
   
    
   
   
    
}
