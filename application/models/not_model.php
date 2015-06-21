<?php

class Not_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function selectNoticiasFature($status = null){
        $status = 1;
        $this->db->order_by("creationdate", "desc");
        $this->db->where("published", $status);
       $query = $this->db->get('news',4)->result();
      return $query;
        
       }
    public function selectNoticiasList($status = null,$maximo,$inicio){
        $this->db->order_by("creationdate", "desc");
        $this->db->where("published", $status);
       $query = $this->db->get('news',$maximo,$inicio)->result();
       
      return $query;
       
       }
       public function contaRegistros($status = null)
            {
           $this->db->from('news');
           $this->db->where("published",$status);
             return $this->db->count_all_results();
            }
            
            public function setNoticia($id = null){
                $this->db->where("id",$id);
                 $query = $this->db->get('news')->result();
                 return $query;
            }
    public function insertNoticia($data = null){
    	$this->db->insert('news', array('creationdate' => 'now()'));
    	
    	
        $this->db->insert('news', $data);
    }
    
    public function updateNot($id = null, $post = null){
        $this->db->where('id', $id);
        $this->db->update('news',$post);
        
    }
    public function deletNoticia($id = null){
        $this->db->delete('news',array('id' => $id));
    }
}