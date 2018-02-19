<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
	}
 
	function index(){
		$data['customer'] = $this->m_data->tampil()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
 		$gender = $this->input->post('gender');
 		$email = $this->input->post('email');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'nohp' => $nohp,
			'gender' => $gender,
			'email' => $email
			);
		$this->m_data->input($data,'customer');
		redirect('crud/index');
	}
	function hapus($id){
		$where = array('customer_id'=>$id);
		$this->m_data->hapus($where, 'customer');
		redirect('crud');
	}
	function edit($id){
		$where = array('customer_id'=>$id);
		$data['customer']=$this->m_data->edit($where, 'customer_id')->result();
		$this->load->view('edit', $data);
	}
}