<?php

class Noticias extends CI_Model{
    protected $news;
    protected $attachments;
    protected $admin_user;
    protected $arquive;


    public function __construct() {
        parent::__construct();
        $this->load->database();
        //Renomeando seleções 
        $this->news = 'news.id as news_id, news.title as news_title, news.slug as news_slug, news.link_reference as news_link_reference, news.description as news_description, news.news as news_news,news.creationdate as news_creationdate, news.modifieddate as news_modifieddate, news.published as news_published, news.fature as news_fature, news.createby as news_createby, news.tabledef as news_tabledef';
        $this->attachments = 'attachments.id as attachments_id, attachments.parent_id as attachments_parent_id, attachments.tabledef as attachments_tabledef, attachments.fature as attachments_fature, attachments.sort as attachments_sort';
        $this->admin_user = 'admin_user.id as admin_user_id, admin_user.define as admin_user_define, admin_user.name as admin_user_name, admin_user.email as admin_user_email';
        $this->arquive = 'archive.id as archive_id, archive.name as archive_name, archive.type as archive_type, archive.size as archive_size, archive.title as archive_title, archive.description as archive_description, archive.url as archive_url';
        
    }
    
     public function set_not_list_fature(){
         $this->db->where('fature','1');
        $news = $this->db->get('news')->result();
        return $news;
    }
    private function set_list(){
         
      $this->db->select($this->attachments);
      $this->db->select($this->news);
      $this->db->select($this->admin_user);
      $this->db->select($this->arquive);
    }
    public function set_not_list($status,$campo = null,$ordem = null){  
        $this->set_list();
        $this->db->join('admin_user','news.createby = admin_user.id','left');
        $this->db->join('attachments','news.id = attachments.parent_id','left');
        $this->db->join('archive','attachments.archive_id = archive.id','left');
        $this->db->order_by($campo,$ordem);
        $this->db->where('news.published',$status);
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

