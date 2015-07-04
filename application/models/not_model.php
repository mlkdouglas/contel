<?php
class Not_model extends CI_Model{    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        }    
        //Seleciona tabela noticias destaques
        public function selectNoticiasFature($status = null){
        $status = 1;
        $this->db->order_by("creationdate", "desc");
        $query = $this->db->get_where("news",array('published' => $status, 'fature'=>'1'),4)->result();
        
        return $query;        
        }
        //Lista noticias
        public function selectNoticiasList($status = null,$maximo,$inicio){
            $this->db->order_by("modifieddate", "DESC");
            $this->db->where("published", $status);
            $query = $this->db->get('news',$maximo,$inicio)->result();
            
            return $query;       
            
            }
            
            // Conta registros encontrados publicados
        public function contaRegistros($status = null){
            $this->db->from('news');
            $this->db->where("published",$status);
            return $this->db->count_all_results();
            }            
        //Seleciona noticia por id
        public function setNoticia($id = null){
            $this->db->where("id",$id);
            $query = $this->db->get('news')->result();
            return $query;
            }
        // Insere noticia no banco    
        public function insertNoticia($data = null){
            $data['creationdate'] = date('Y-m-d');
            $this->db->insert('news',$data);
            return  $this->db->insert_id('news'); 
                            	
            }
        // Atualiza noticia    
        public function updateNot($id = null, $post = null){
            $this->db->where('id', $id);
            $this->db->update('news',$post);            
            }
        
        //excluir noticias
        public function deletNoticia($id = null){
            $this->db->delete('news',array('id' => $id));
            }
            
        }