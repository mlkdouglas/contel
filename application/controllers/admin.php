<?php

class Admin extends CI_Controller 
{
    
    public function index() 
    {
        
    }
    
    public function noticias() 
    {
        $data['page'] = 'noticias/listar';
        $this->load->view('admin/admin_view', $data);
    }
    
}