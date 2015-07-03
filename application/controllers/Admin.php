<?php

class Admin extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model('not_model');
    }
    
    
    //Modulo de páginação
    protected function paginacao($maximo,$status){
        $this->load->library('pagination'); //Carrega a biblioteca pagination CI
        $config['base_url'] = base_url('admin/noticias'); //Url Base da página
        $config['total_rows'] = $this->not_model->contaRegistros($status); // Conta total de resultados Ativos ou Inativos "1 - Ativo / 0 - Inativo"
        $config['per_page'] = $maximo; //Conta o valor maximo por página
        $config['first_link'] = 'Primeiro'; //Cria menu de navegação de páginas
        $config['last_link'] = 'Último';//Cria menu de navegação de páginas
        $config['next_link'] = 'Próximo';//Cria menu de navegação de páginas
        $config['prev_link'] = 'Anterior';//Cria menu de navegação de páginas
        return  $this->pagination->initialize($config); //Inicia a paginação
        }
        
    public function index()     {
        $data['page'] = 'home';
        $this->load->view('admin/admin_view', $data);        
    }
    
    public function noticias()     {
        
        
        $status = "1";
        $maximo = 1; // Maximo de resultados por página
        $inicio = (!$this->uri->segment("2")) ? 0 : $this->uri->segment("3"); //Obtem valor de url para selecionar página de paginação
        $this->paginacao($maximo,$status); //Seta função de páginação com valor maximo de resultados e Status da noticia - se (1 = Ativo 0 = Inativo)
        $data["paginacao"] =  $this->pagination->create_links(); // Cria links de paginação na página
        $data['total_result'] = $this->not_model->contaRegistros($status); // Conta total de resultados encontrados de acordo com status
        $data['not_list'] = $this->not_model->selectNoticiasList($status, $maximo,$inicio); //consulta no banco de dados
        $data['page'] = 'noticias/listar';
        $this->load->view('admin/admin_view', $data);
        
    }
     public function novanoticia(){
         
         $data['page']="noticias/novanoticia";
         $this->load->view('admin/admin_view',$data);
     }
     
     public function atualizanoticia(){ 
        $id = $this->uri->segment("3");
        $post = $this->input->post();// recebe post do formulário
        //(!$this->uri->segment("4") != null)?0:$this->not_model->updateNot($id,$post);// . redirect('admin/noticias/', 'refresh');
        if ($this->uri->segment("4") != null)
        {
            $this->not_model->updateNot($id,$post);
            echo json_encode("ok");
        }else {
            $data['noticia'] = $this->not_model->setNoticia($id);
            $data['page']="noticias/atualiza";
            $this->load->view('admin/admin_view',$data);         
        }
        
        
        
        }
     public function cadastrar(){
         $post = $this->input->post();
         //print_r($post);
         $insert = $this->not_model->insertNoticia($post);
        
         echo json_encode($insert);
         
         //$data['dados'] = $post;         
         //$data['page']="noticias/cadastrar";
         //$this->load->view('admin/admin_view',$data);
        // redirect('admin/noticias/', 'refresh');
         }
     public function deletar(){
        $action = ($this->uri->segment("4")!="del") ? null : $this->uri->segment("3");
       // print_r($inicio);
        if($action != null){$this->not_model->deletNoticia($action);redirect('admin/noticias/', 'refresh');}
        $data['id'] = $this->uri->segment("3");
        $data['page']="noticias/deletar";
        $this->load->view('admin/admin_view',$data);     
        }
        
        public function database(){
             $this->load->model('data_model');
           /* Exemplo
            * CRIANDO UMA NOVA TABELA
           
            $fields = array('id'=>array(
                'type'=>'INT',
                'constraint'=>5,
                'usigned'=>TRUE,
                'auto_increment'=>TRUE
            ),
                'name'=>array('type'=>'VARCHAR',
                        'constraint'=>150,
                        ));
            $key = 'id';
            $this->data_model->create_table('teste',$fields,$key);
            * 
            */
          
             //REMOVENDO UMA COLUNA
             //$this->data_model->remove_col('teste','name');
             
             //ADICIONANDO NOVAS COLUNAS
             /*
             $fields = array('name'=>array(
                 'type'=>'VARCHAR',
                 'constraint'=>100,
                 'default'=>'Fabio'
             ));
             $this->data_model->add_col('teste',$fields);
              * 
              */
                
             
             //ALTERANDO UMA COLUNA
             /*
             $fields = array(
              * 'new_name' => array(              
              * 'type' => 'VARCHAR',
              * 'constraint'=>100 ),);
              *  $this->data_model->change_col('teste',$fields);
              * 
              */
             
             $fields = array(
                 'status' => array(
                     'type'=>'VARCHAR',
                     'constraint'=>3,
                     'default'=>'1'
                 )
             );
             $this->data_model->change_col('complaint',$fields);
        }
    
}