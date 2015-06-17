<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
    
    function index() 
    {
       // echo 'teste';
        
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
    
    
    
}