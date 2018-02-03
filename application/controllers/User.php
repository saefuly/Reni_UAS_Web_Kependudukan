<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');
        $this->load->library('simple_login');

}

public function index()
{
$this->load->view("register.php");
}

public function register_user(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['user_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');


}

}

public function login_view(){

 if($this->simple_login->isUserLogged() == true)
        {
            redirect('user/halaman_admin');
        }

$this->load->view("login.php");

}

function login_user(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);

        redirect('user/halaman_admin');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }


}

function halaman_admin()
{
     if($this->simple_login->isUserLogged() == true)
        {
             $this->load->view('index.php');
        }
      else
      {
        redirect('user/user_logout');
      }
}

function user_profile(){

$this->load->view('user_profile.php');

}

function add_penduduk()/*{{{*/
{
   if($this->simple_login->isUserLogged() == true)
        {
              $this->load->view('form_b.php');
        }
      else
      {
        redirect('user/user_logout');
      }
 
}/*}}}*/

function list_penduduk()/*{{{*/
{
   if($this->simple_login->isUserLogged() == true)
        {
              $data['user'] = $this->user_model->list_user()->result();
  $this->load->view('list_penduduk.php',$data);
        }
      else
      {
        redirect('user/user_logout');
      }
  
}/*}}}*/

function list_user()/*{{{*/
{
  if($this->simple_login->isUserLogged() == true)
        {
               $data['user'] = $this->user_model->list_user_login()->result();
  $this->load->view('list_user.php',$data);
        }
      else
      {
        redirect('user/user_logout');
      }
 
}/*}}}*/

function insert_penduduk(){


    $file = null;

    if(!empty($_FILES['userfile']['tmp_name']))
    {
        $extensi = "";

        foreach (explode(".",$_FILES['userfile']['name']) as $a) {
            
            $extensi = $a;
        }

        $file = 'file'. time().'.'.$extensi;

        move_uploaded_file($_FILES['userfile']['tmp_name'],"images/".$file);
    }
    else
    {
      $file = null;
    }

    $data['nik'] = $this->input->post('nik');
    $data['nama_lengkap'] = $this->input->post('nama_lengkap');
    $data['tempat_lahir'] = $this->input->post('tempat_lahir');
    $data['tgl_lahir'] = $this->input->post('tgl_lahir');
    $data['jk'] = $this->input->post('jk');
    $data['alamat'] = $this->input->post('alamat');
    $data['rt'] = $this->input->post('rt');
    $data['rw'] = $this->input->post('rw');
    $data['kelurahan'] = $this->input->post('kelurahan');
    $data['kecamatan'] = $this->input->post('kecamatan');
    $data['agama'] = $this->input->post('agama');
    $data['status'] = $this->input->post('status');
    $data['pekerjaan'] = $this->input->post('pekerjaan');
    $data['kewarganegaraan'] = $this->input->post('kewarganegaraan');
    $data['foto_wajah'] = $file;

    $this->user_model->penduduk($data);

    redirect(site_url('user/list_penduduk'));

} 

function edit_penduduk($nik)/*{{{*/
{
    if($this->simple_login->isUserLogged() == true){
        $data['user'] = $this->user_model->list_user_login()->result();
        $where = array('nik' => $nik);
        $data['penduduk'] = $this->user_model->edit_datapenduduk($where,'penduduk')->result();
        $this->load->view('edit_b.php',$data);


    }
    else{
        redirect('user/user_logout');
    }
 
}/*}}}*/


function edit_user($user_id)/*{{{*/
{
    if($this->simple_login->isUserLogged() == true){
        $data['user'] = $this->user_model->list_user_login()->result();
        $where = array('user_id' => $user_id);
        $data['user'] = $this->user_model->edit_datauser($where,'user')->result();
        $this->load->view('edit_user.php',$data);


    }
    else{
        redirect('user/user_logout');
    }
 
}/*}}}*/


function update_penduduk(){

    $file = null;

    if(!empty($_FILES['userfile']['tmp_name']))
    {
        $extensi = "";

        foreach (explode(".",$_FILES['userfile']['name']) as $a) {
            
            $extensi = $a;
        }

        $file = 'file'. time().'.'.$extensi;

        move_uploaded_file($_FILES['userfile']['tmp_name'],"images/".$file);
    }
    else
    {
      $file = null;
    }

    $nik = $this->input->post('nik');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $jk = $this->input->post('jk');  
    $alamat = $this->input->post('alamat');  
    $rt = $this->input->post('rt');  
    $rw = $this->input->post('rw');  
    $kelurahan = $this->input->post('kelurahan');  
    $kecamatan = $this->input->post('kecamatan');  
    $agama = $this->input->post('agama');  
    $status = $this->input->post('status');  
    $pekerjaan = $this->input->post('pekerjaan');  
    $kewarganegaraan = $this->input->post('kewarganegaraan');  
    $foto_wajah = $file;  

    $data = array(
        'nama_lengkap' => $nama_lengkap,
        'tempat_lahir' => $tempat_lahir,
        'tgl_lahir' => $tgl_lahir,
        'jk' => $jk,
        'alamat' => $alamat,
        'rt' => $rt,
        'rw' => $rw,
        'kelurahan' => $kelurahan,
        'kecamatan' => $kecamatan,
        'agama' => $agama,
        'status' => $status,
        'pekerjaan' => $pekerjaan,
        'kewarganegaraan' => $kewarganegaraan,
        'foto_wajah' => $foto_wajah,
    );

    $where = array(
        'nik' => $nik
    );

    $this->user_model->update_datapenduduk($where,$data,'penduduk');
    redirect('user/list_penduduk');
}


function update_user(){

    $user_id = $this->input->post('user_id');
    $user_name = $this->input->post('user_name');
    $user_email = $this->input->post('user_email');
    $user_password = md5($this->input->post('user_password'));
    $user_age = $this->input->post('user_age');  
    $user_mobile = $this->input->post('user_mobile');  

    $data = array(
        'user_id' => $user_id,
        'user_name' => $user_name,
        'user_email' => $user_email,
        'user_password' => $user_password,
        'user_age' => $user_age,
        'user_mobile' => $user_mobile,
    );

    $where = array(
        'user_id' => $user_id
    );

    $this->user_model->update_datauser($where,$data,'user');
    redirect('user/list_user');
}

function hapus_penduduk($nik){
    $where = array('nik' => $nik);
    $this->user_model->hapus_datapenduduk($where,'penduduk');
    redirect('user/list_penduduk');
}


function hapus_user($user_id){
    $where = array('user_id' => $user_id);
    $this->user_model->hapus_datauser($where,'user');
    redirect('user/list_user');
}


public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}

?>
