<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_sidebarleft extends CI_Controller {

	  function __construct()
	  {
	      parent::__construct();
	      $this->load->model('m_wjberanda');
	  }

	  public function index()
	  {
	      $this->load->view('sidebar-left.php');    
	  }

	  public function input_komentar()
	  {
	    if(isset($_POST['submit']))
	    {
	      $nama = $this->input->post('nama');
	      $email = $this->input->post('email');
	      $komentar = $this->input->post('komentar');
	                  
	      $data = array(
	                  'nama' => $nama,
	                  'email' => $email,
	                  'komentar' => $komentar
	      );
	  $this->m_wjberanda->input_data('tbl_comment', $data);
	  } 
	      redirect('c_sidebarleft');
	  }
 }
