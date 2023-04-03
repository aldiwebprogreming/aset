<?php 

	/**
	 * 
	 */
	class App extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			// if ($this->session->username == null) {
			// 	redirect('login/');
			// }
		}

		function index(){
			
			$this->load->view('template/header');
			$this->load->view('app/index');
			$this->load->view('template/footer');
		}

		
		function data_lokasi(){
			$data['lokasi'] = $this->db->get('tbl_lokasi')->result_array();
			$data['kode'] = "LK-".rand(0,1000);
			$this->load->view('template/header');
			$this->load->view('app/data_lokasi', $data);
			$this->load->view('template/footer');
		}

		function act_addlokasi(){

			$data = [
				'kode' => $this->input->post('kode'),
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'ruangan' => $this->input->post('ruangan')
			];

			$this->db->insert('tbl_lokasi', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil ditambah", "success");');
			redirect('app/data_lokasi');	
		}

		function act_editlokasi(){

			$id = $this->input->post('id');
			$data = [
				'kode' => $this->input->post('kode'),
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'ruangan' => $this->input->post('ruangan')
			];

			$this->db->where('id', $id);
			$this->db->update('tbl_lokasi', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil diubah", "success");');
			redirect('app/data_lokasi');	
		}

		function act_hapuslokasi(){
			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_lokasi');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success");');
			redirect('app/data_lokasi');
		}

		function data_admin(){

			$data['admin'] = $this->db->get('tbl_admin')->result_array();
			$data['kode'] = "AD-".rand(0,1000);
			$this->load->view('template/header');
			$this->load->view('app/data_admin', $data);
			$this->load->view('template/footer');


		}

		function act_addAdmin(){

			$data = [
				'kode' => $this->input->post('kode'),
				'jabatan' => $this->input->post('jabatan'),
				'username' => $this->input->post('username'),
				'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
			];

			$this->db->insert('tbl_admin', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil ditambah", "success");');
			redirect('app/data_admin');	
		}

		function act_editAdmin(){


			$data = [
				'kode' => $this->input->post('kode'),
				'jabatan' => $this->input->post('jabatan'),
				'username' => $this->input->post('username'),
				'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('tbl_admin', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil diubah", "success");');
			redirect('app/data_admin');	
		}

		function act_hapusAdmin(){
			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_admin');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success");');
			redirect('app/data_admin');
		}


		function data_kategori(){

			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();
			$data['kode'] = 'KT-'.rand(0, 1000);

			$this->load->view('template/header');
			$this->load->view('app/data_kategori', $data);
			$this->load->view('template/footer');
		}

		function act_addkategori(){

			$data = [
				'kode' => $this->input->post('kode'),
				'nama_kategori' => $this->input->post('nama_kategori'),
			];

			$this->db->insert('tbl_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil ditambah", "success");');
			redirect('app/data_kategori');
		}

		function act_editkategori(){

			$data = [
				'nama_kategori' => $this->input->post('nama_kategori'),
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('tbl_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil diubah", "success");');
			redirect('app/data_kategori');

		}

		function act_hapuskategori(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_kategori');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success");');
			redirect('app/data_kategori');

		}


		function data_kualitas(){

			$data['kualitas'] = $this->db->get('tbl_kualitas')->result_array();
			$data['kode'] = 'KL-'.rand(0, 1000);

			$this->load->view('template/header');
			$this->load->view('app/data_kualitas', $data);
			$this->load->view('template/footer');
		}

		function act_addkualitas(){

			$data = [

				'kode' => $this->input->post('kode'),
				'kualitas' => $this->input->post('kualitas')
			];

			$this->db->insert('tbl_kualitas', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil ditambah", "success");');
			redirect('app/data_kualitas');
		}

		function act_editkualitas(){

			$data = [
				'kualitas' => $this->input->post('kualitas'),
			];

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->update('tbl_kualitas', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil diubah", "success");');
			redirect('app/data_kualitas');
		}

		function act_hapuskualitas(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_kualitas');

			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success");');
			redirect('app/data_kualitas');

		}

		function data_aset(){

			$data['aset'] = $this->db->get('tbl_aset')->result_array();
			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();
			$data['kualitas'] = $this->db->get('tbl_kualitas')->result_array();
			$data['kode'] = 'KA-'.rand(0,1000);
			$this->load->view('template/header');
			$this->load->view('app/data_aset', $data);
			$this->load->view('template/footer');
		}

	}

	?>