<?php

class Noticias extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
     public function set_not_list_fature(){
         $this->db->where('fature','1');
        $news = $this->db->get('news')->result();
        return $news;
    }
    public function set_not_list($campo,$ordem){  
        $this->db->select('news.*, attachments.*,archive.*');
        $this->db->join('attachments','news.id = attachments.parent_id','left');
        $this->db->join('archive','attachments.archive_id = archive.id','left');
        $this->db->order_by($campo,$ordem);
        $news = $this->db->get('news')->result();
       return $news;
    }
    public function set_not_id($id){
        $this->db->where('id',$id);
         $news = $this->db->get('news')->result();
        return $news;
    }
   
    public function insert_not($data){
         $data['creationdate'] = date('Y-m-d');
            $this->db->insert('news',$data);
            return $this->db->insert_id('news');
    }
    public function update_not($id, $data){
        $this->db->where('id',$id);
       return $this->db->update('news',$data);
    }
    public function delet_not($id){
         $this->db->where('id',$id);
         return $this->db->delete('news');
    }
}

