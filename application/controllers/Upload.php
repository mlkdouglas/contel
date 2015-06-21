<?php

class Upload extends CI_Controller{
    

                function __construct(){
                        parent::__construct();
                        $this->load->helper('directory');
                        $this->load->helper(array('form'));
                }	
    public function index(){
        
        $data['page'] = 'upload';
        $this->load->view('admin/admin_view', $data);       
    }
    
function enviar(){
                        //Configurações necessárias para fazer upload do arquivo
                        
                        //Pasta onde será feito o upload
                        
                        $config['upload_path'] = 'application/views/admin/upload/anexos';
                        //Tipos suportados
                        $config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf|xlsx|xls';
                        //Configurando atributos do arquivo imagem que iremos receber
                        $config['max_size']     = '3000';
                        $config['max_width']  = '1024';
                        $config['max_height']  = '768';
        
                        //Carregando a lib com as configurações feitas
                        $this->load->library('upload', $config);
                        
                        //Fazendo o upload do arquivo e direcionando para a view de erro ou de sucesso
                        if( ! $this->upload->do_upload('arquivo')){
                                $error = array('error' => $this->upload->display_errors());
        
                               $data['error']= $error;
                                $data['page'] = 'upload/erro';
                                $this->load->view('admin/admin_view', $data);
                        }
                        else
                        {
                                $data = array('arquivo_data' => $this->upload->data());
                                 $data['page'] = 'upload/sucesso';
        $this->load->view('admin/admin_view', $data);       
                        }
                }
        }