<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminnoticia extends CI_Controller {
    protected $controlpath = 'admin/admin_view';
    
    public function __construct() {
        parent::__construct();
        $this->load->model('mastermembership');
    }
    
    public function _remap($method, $params = array())
{
       // echo $method;die();
       //var_dump($params);die();
        if (method_exists($this, $method))
        {
             //   return call_user_func_array(array($this, $method), $params);
        }
        show_404();
}
private function default_method(){
    $this->index();
}


public function index(){
        $session = $this->nsession->userdata('adminlogado');
        $user_dados = $this->mastermembership->set_user_id($session);
        $data = array(       
            'title' => 'Contel - DASHBOARD',
            'user_dados' => $user_dados,
           'body' => 'noticias/noticialist', 
            'navtop' =>array(
                0 => '<a href="'.base_url('admin/').'"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>',
                1 => '<a href="'.base_url('admin/user_admin').'"><i class="fa fa-fw fa-bar-chart-o"></i> Membros</a>',
                2 => '<a href="'.base_url('admin/noticias').'"><i class="fa fa-fw fa-table"></i> Noticias</a>',
                3 => '<a href="'.base_url('admin/enquetes').'"><i class="fa fa-fw fa-edit"></i> Enquetes</a>',
                4 => '<a href="'.base_url('admin/reclamacao').'"><i class="fa fa-fw fa-desktop"></i> Reclamações</a>',
                
            ),
            
            'btnlogin' => (!$session)?array(
                ):
                array(
                '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> '.$user_dados[0]->admin_name.' <b class="caret"></b></a> <ul class="dropdown-menu">',
                '<li><a href="#"><i class="fa fa-fw fa-user"></i> Profile</a></li>',
                '<li> <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a></li>',
                '<li><a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a></li>',
                '<li class="divider"></li>',
                '<a href="#" class="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>',
                '</ul></li>',
            ),
                
            
        );
       // print_r($session);
        if($session != null){
             $this->load->view($this->controlpath, $data);
           
        }else{
       $this->load->view('includers/admin/login_view');
        }
        
    }
    
   
    public function teste($andals,$id){
        echo $andals;
        echo $id;
        echo "teste";
        $data['body'] = "teste";
         $this->load->view($this->controlpath, $data);
    }
}
