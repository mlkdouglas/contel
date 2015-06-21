<?php

class Not_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function selectNoticiasFature($status = null){
        $status = 1;
        $this->db->order_by("not_criationdate", "desc");
        $this->db->where("not_status", $status);
       $query = $this->db->get('cl_noticias_consumidor',4)->result();
      return $query;
        
       }
    public function selectNoticiasList($status = null,$maximo,$inicio){
        $this->db->order_by("not_criationdate", "desc");
        $this->db->where("not_status", $status);
       $query = $this->db->get('cl_noticias_consumidor',$maximo,$inicio)->result();
       
      return $query;
       
       }
       public function contaRegistros($status = null)
            {
           $this->db->from('cl_noticias_consumidor');
           $this->db->where("not_status",$status);
             return $this->db->count_all_results();
            }
    public function insertNoticia($data = null){
        $this->db->insert('cl_noticias_consumidor',$data);
    }
    public function deletNoticia($id = null){
        $this->db->delete('cl_noticias_consumidor',array('not_id' => $id));
    }
}