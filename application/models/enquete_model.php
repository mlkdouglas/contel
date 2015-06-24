<?php

class Enquete_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function selectEnqueteFature($published = null){
        $published = 1;
        $this->db->order_by("modifieddate", "desc");
        $this->db->where("published", $published);
       $query = $this->db->get('enquete',4)->result();
      return $query;
        
       }
        public function selectEnquete($parentid){
            $this->db->where("parentid",$parentid);
        $this->db->order_by("creationdate", "desc");
        $query = $this->db->get('enquete',1)->result();
      return $query;
        
       }
    public function selectEnqueteList($published = null,$maximo,$inicio){
        $this->db->order_by("modifieddate", "desc");
       // $this->db->where("$published", $published);
       $query = $this->db->get_where('enquete',array('parentid'=>0, 'published'=>$published),$maximo,$inicio)->result();
       
      return $query;
       
       }
       public function contaRegistros($published = null)
            {
           $this->db->from('enquete');
           $this->db->where("parentid",0);
           $this->db->where("published",$published);
             return $this->db->count_all_results();
            }
            
            public function setEnquete($id = null){
                $this->db->where("id",$id);
                 $query = $this->db->get('enquete')->result();
                 return $query;
            }
             public function setEnqueterespostas($id = null){
                $this->db->where("parentid",$id);
                 $query = $this->db->get('enquete')->result();
                 return $query;
            }
    public function insertEnquete($data = null){
        $data['creationdate']= date('Y-m-d H:i:s');
    	$this->db->insert('enquete',$data);
    	
          
    }
    
    public function updateEnquete($id = null, $post = null){
        $this->db->where('id', $id);
        $this->db->update('enquete',$post);
        
    }
    public function deletEnquete($id = null){
        $this->db->delete('enquete',array('id' => $id));
    }
}