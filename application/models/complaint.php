<?php

class Complaint extends CI_Model{
    
    protected $define;
    protected $complaint;
    protected $user;
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->define = "define_complaint.id as id_define, define_complaint.title as title_define";
        $this->user = "user.id as user_id,user.name as user_name,user.email as user_email,user.cpf_cnpj as user_cpfcnpj, user.phone as user_tel, user.zipcode as user_zipcode, user.address as user_address, user.number as user_number, user.complement as user_complement, user.state as user_state, user.birth as user_birth, user.creationdate as user_creationdate, user.modifieddate as user_modifieddate, user.status as user_status";
        $this->admin_user = "admin_user.id as admin_user_id,admin_user.name as admin_user_name,admin_user.email as admin_user_email, admin_user.creationdate as admin_user_creationdate, admin_user.modifieddate as admin_user_modifieddate, admin_user.status as admin_user_status";
        
        
    }
    
    private function set_list(){
         
      $this->db->select($this->define);
      $this->db->select($this->user);
      $this->db->select($this->admin_user);
      $this->db->select('complaint.*');
      
    }
    
     public function set_complaint_list($status,$campo = null,$ordem = null){  
        $this->set_list();
        $this->db->join('define_complaint','complaint.related = define_complaint.id','left');
        $this->db->join('user','user.id = complaint.createdby','left');
        $this->db->join('admin_user','admin_user.id = complaint.fortreaty','left');
        $this->db->order_by($campo,$ordem);
        $this->db->where('complaint.status',$status);
        $complaint = $this->db->get('complaint')->result();
       return $complaint;
    }
    
    public function set_complaint_protocol($protocol){
        $this->set_list();
        $this->db->join('define_complaint','complaint.related = define_complaint.id','left');
        $this->db->join('user','user.id = complaint.createdby','left');
        $this->db->join('admin_user','admin_user.id = complaint.fortreaty','left');
        $this->db->where('protocol',$protocol);
        return $this->db->get('complaint')->result();
    }
    public function set_complaint_id($id){
        $this->set_list();
        $this->db->join('define_complaint','complaint.related = define_complaint.id','left');
        $this->db->join('user','user.id = complaint.createdby','left');
        $this->db->join('admin_user','admin_user.id = complaint.fortreaty','left');
        $this->db->where('complaint.id',$id);
        return $this->db->get('complaint')->result();
    }
    
    public function insert_complaint($data){
        $this->db->insert('complaint',$data);
        return $this->db->insert_id('complaint');
    }
    
    public function update_complaint($id){
        return $this->db->update('complaint',$id);
           
    }
    
   public function define_complaint(){
       $this->db->where('status','1');
       return $this->db->get('define_complaint')->result();
   }
    
}
