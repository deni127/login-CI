<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends MY_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }
  public function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
      redirect('index.php/beranda'); // Redirect ke page home
    // function render_login tersebut dari file core/MY_Controller.php
    $this->render_login('v_login'); // Load view login.php
  }
  public function login(){
    $username = $this->input->post('usernameuser'); // Ambil isi dari inputan username pada form login
    $password = ($this->input->post('passworduser')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      echo "<script>alert('Username atau Password salah!');
        window.location.href='reload';
        </script>";
    }else{
      if($password == $user->passworduser){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'username'=>$user->usernameuser,  // Buat session username
          'status' => "login",
          'level'=>$user->level // Buat session role
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('index.php/beranda'); // Redirect ke halaman home
      }else{
        echo "<script>alert('Username atau Password salah!');
        window.location.href='reload';
        </script>";
      }
    }
  }
  function reload(){
    redirect(base_url("index.php/auth"));
  }
  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('index.php/auth'); // Redirect ke halaman login
  }
}








