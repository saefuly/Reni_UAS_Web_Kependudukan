<?php
class User_model extends CI_model{



public function register_user($user){


$this->db->insert('user', $user);

}

public function login_user($email,$pass){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_check($email){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

public function penduduk($data){

      $this->db->insert('penduduk',$data);
}

public function list_user(){
    $user = $this->db->get('penduduk');

    return $user;
}

public function list_user_login(){
    $user = $this->db->get('user');

    return $user;
}

function edit_datapenduduk($where,$table){  
    return $this->db->get_where($table,$where);
}

function edit_datauser($where,$table){  
    return $this->db->get_where($table,$where);
}

function update_datapenduduk($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
} 

function update_datauser($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
} 

function hapus_datapenduduk($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
} 

function hapus_datauser($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
} 

}


?>
