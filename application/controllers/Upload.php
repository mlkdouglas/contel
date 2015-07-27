<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Upload extends CI_Controller{
    public function __construct() {
        parent::__construct();
       
    }
    
    public function enviar(){       
        $size = number_format($_FILES['imagem']['size'] / 1000, 2, ',', ' ');
        $extencion = $_FILES['imagem']['type'];
        $type = substr(strrchr($extencion,'/' ),1);                     
        if(isset($_FILES['imagem'])){              
            require 'libs/global/libs/WideImage/WideImage.php';            
            date_default_timezone_set("Brazil/East"); 
            $name 	= $_FILES['imagem']['name'];
            $tmp_name = $_FILES['imagem']['tmp_name']; 
            $allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp"); 
            $dir = 'libs/upload/';      
            $ext = '.'.$type; 
            if(in_array($ext, $allowedExts)){
                $new_name = md5(date("Y.m.d-H.i.s")) . $ext; 
                $image = WideImage::load($tmp_name);
                //$image = $image->resize(170, 180, 'outside');
                //$image = $image->crop('center', 'center', 170, 180);
                $image->saveToFile($dir.$new_name);
                }                        
                echo '<div class="col-md-12">
                    <div class="panel panel-default">
                    <div class="panel-heading">Imagem de destaque</div>
                    <hr>
                    <div class="panel-body"><img src="'.base_url($dir.$new_name).'" class="col-md-6" />';
                echo '<div class="col-md-6">'
                     .'<form action="" method="post" id="formarchive" class="form-horizontal">'
                     . '<div class="form-group">'
                     . '<label for="title">'
                     . 'Titulo: '
                     . '</label>'
                     . '<input type="hidden" class="form-control" name="name" id="name" value="'.$name.'" >'
                     . '<input type="text" class="form-control" name="title" id="title" value="" >'
                     . '</div>'
                     . '<input type="hidden" class=" col-xs-4" name="type" id="type" value="'.$type.'"  >'
                     . '<input type="hidden" class="col-xs-4" name="size" id="size" value="'.$size.'"  >'
                     .'<div class="form-group">'
                     . '<label for="description">'
                     . 'Descrição: '
                     . '</label>'
                     . '<textarea name="description" id="description" ></textarea>'
                     . '</div>'
                     . '<input type="hidden" value="'.$new_name.'" name="url" id="url" ></div></div></div>';
                }else{
                    echo 'erro';                
                }
                }    
                public function salvar_archive(){
                    $this->load->model('archive');        
                    $data = $this->input->post();        
                    $id_archive = $this->archive->insert($data);
                    $img = $this->archive->ready_id($id_archive);
                    foreach($img as $item):
                        echo '<img src="'.base_url('libs/upload/'.$item->url).'" class="col-md-12" />';
                    endforeach;        
                    echo '<input type="hidden" name="id_arquive" id="id_arquive" value="'.$id_archive.'">';
                    }    
                    public function selectimg(){
                        $this->load->model('archive');        
                        $data = $this->input->post('id_attachments');                          
                        $img = $this->archive->ready_id($data);
                        foreach($img as $item):
                            echo '<img src="'.base_url('libs/upload/'.$item->url).'" class="col-md-12" />';
                        endforeach;        
                        echo '<input type="hidden" name="id_arquive" id="id_arquive" value="'.$data.'">';
                        }
                        
                        }
