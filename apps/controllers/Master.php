<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Master extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('nama')==""){
			redirect('Login');
		}
		// parent::__construct();
		// //setting helper
		// $this->load->helper(array('url'));
		// //setting model (database)
		// $this->load->model('modelnya');
		// //setting library
		// //'googleplus' library yang diambil dari folder "application/libraries"
		// $this->load->library(array('session'));
		// if($this->modelnya->isNotLogin()) redirect(site_url('Login'));
	}

	public function error(){
		$this->load->view('index.html');
	}

	public function index()
	{
		redirect(base_url());
	}
 

	public function datapeminjaman()
	{
		$data['peminjaman'] = $this->db->get("tbl_peminjaman");
		$data['content'] = 'peminjaman/peminjaman_v';
		$this->load->view('_layouts/main_v',$data);
	}

	public function datapinjam()
	{
		$data['peminjaman'] = $this->db->get("tbl_peminjaman");
		$data['content'] = 'peminjaman/modal_add';
		$this->load->view('_layouts/main_v',$data);
	}

	public function databalik()
	{
		$data['peminjaman'] = $this->db->get("tbl_peminjaman");
		$data['content'] = 'peminjaman/modal_upd';
		$this->load->view('_layouts/main_v',$data);
	}

	public function dataanggota()
	{
		$data['anggota'] = $this->db->get("tbl_anggota");
		$data['content'] = 'anggota/anggota_v';
		$this->load->view('_layouts/main_v',$data);
	}

	public function dataproduk()
	{
		$data['produk'] = $this->db->get("tbl_produk");
		$data['content'] = 'produk/produk_v';
		$this->load->view('_layouts/main_v',$data);
	}

	// public function dataanggota()
	// {
	// 	$data['produk'] = $this->db->get("jumlahanggota");
	// }

	public function databuku()
	{
		$data['buku'] = $this->db->get("tbl_buku");
		$data['content'] = 'buku/buku_v';
		$this->load->view('_layouts/main_v',$data);
	}

	public function inputanggota(){
		echo show_my_modal("anggota/modal_add","md_add");
	}

	public function inputpeminjaman(){
		echo show_my_modal("peminjaman/modal_add","md_add");
	}

	public function inputproduk(){
		echo show_my_modal("produk/modal_add","md_add");
	}

	public function inputbuku(){
		echo show_my_modal("buku/modal_add","md_add");
	}

	public function simpandataanggota(){
		if(isset($_POST) && !empty($_POST)){
			$id_anggota = $this->input->post("id_anggota");
			$cek = $this->db->query("select * from tbl_anggota where id_anggota = '$id_anggota'");
			$hasil = $cek->num_rows();
			if($hasil > 0)
			{
				$this->session->set_flashdata("msg","<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a>	<strong> Simpan Data anggota Gagal (NPM Sudah Ada !!)</strong></div>");
				header('location:'.base_url().'Master/dataanggota');
			}
			else
			{
				$data = array(
					'id_anggota'=> $this->input->post('id_anggota'),
					'nama'=>$this->input->post('nama'),
					'jabatan'=>$this->input->post('Jabatan'),
					'alamat'=>$this->input->post('alamat'),
					'nomorhp'=>$this->input->post('nomorhp'),
					);

				$this->db->insert("tbl_anggota",$data);
				
				header('location:'.base_url().'Master/dataanggota');

			}
			
			

		}
	}

	public function simpandatapeminjaman(){
		if(isset($_POST) && !empty($_POST)){
			$idpinjaman = $this->input->post("idpinjaman");
			$cek = $this->db->query("select * from tbl_peminjaman where idpinjaman = '$idpinjaman'");
			$hasil = $cek->num_rows();
			if($hasil > 0)
			{
				$this->session->set_flashdata("msg","<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a>	<strong> Simpan Data anggota Gagal (Kode Sudah Ada !!)</strong></div>");
				header('location:'.base_url().'Master/datapeminjaman');
			}
			else
			{
				$data = array(
					'idpinjaman'=> $this->input->post('idpinjaman'),
					'idpeminjam'=> $this->input->post('idpeminjam'),
					'namapeminjam'=>$this->input->post('namapeminjam'),
					'lamapinjaman'=>$this->input->post('lamapinjaman'),
					'kdbkpjm'=>$this->input->post('kdbkpjm'),
					);

				$this->db->insert("tbl_peminjaman",$data);
				
				header('location:'.base_url().'Master/datapeminjaman');

			}
		}
	}

	public function simpandataproduk(){
		if(isset($_POST) && !empty($_POST)){
			$kodeproduk = $this->input->post("kodeproduk");
			$cek = $this->db->query("select * from tbl_produk where kodeproduk = '$kodeproduk'");
			$hasil = $cek->num_rows();
			if($hasil > 0)
			{
				$this->session->set_flashdata("msg","<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a>	<strong> Simpan Data Produk Gagal (Kode Produk Sudah Ada !!)</strong></div>");
				header('location:'.base_url().'Master/dataproduk');
			}
			else
			{
				$data = array(
					'kodeproduk'=>$this->input->post('kodeproduk'),
					'namaproduk'=>$this->input->post('namaproduk'),
					'hargaproduk'=>$this->input->post('hargaproduk'),
					'jenisproduk'=>$this->input->post('jenisproduk'),
					'stokproduk'=>$this->input->post('stokproduk'),
					);

				$this->db->insert("tbl_produk",$data);
				
				$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible'><h4><i class='icon fa fa-check'></i> Success!</h4> Berhasil menambah Data Produk
					</div>");

				header('location:'.base_url().'Master/dataproduk');

			}

		}

	}

	public function simpandatabuku(){
		if(isset($_POST) && !empty($_POST)){
			$kodebuku = $this->input->post("kodebuku");
			$cek = $this->db->query("select * from tbl_buku where kodebuku = '$kodebuku'");
			$hasil = $cek->num_rows();
			if($hasil > 0)
			{
				$this->session->set_flashdata("msg","<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a>	<strong> Simpan Data Buku Gagal (Kode Buku Sudah Ada !!)</strong></div>");
				header('location:'.base_url().'Master/databuku');
			}
			else
			{
				$data = array(
					'kodebuku'=>$this->input->post('kodebuku'),
					'namabuku'=>$this->input->post('namabuku'),
					'pengarang'=>$this->input->post('pengarang'),
					'penerbit'=>$this->input->post('penerbit'),
					'statussedia'=>$this->input->post('statussedia'),
					'jumlahbuku'=>$this->input->post('jumlahbuku'),
					);

				$this->db->insert("tbl_buku",$data);
				
				$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible'><h4><i class='icon fa fa-check'></i> Success!</h4> Berhasil menambah Data Buku
					</div>");

				header('location:'.base_url().'Master/databuku');

			}

		}

	}

	public function hapusanggota(){
		if(isset($_POST) && !empty($_POST))
		{
			$where['id_anggota'] = $this->input->post('id');
			$this->db->delete("tbl_anggota",$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Menghapus Data anggota
				</div>");
			header('location:'.base_url().'Master/dataanggota');

		}else
			
				$this->error();
	}

	public function hapusproduk(){
		if(isset($_POST) && !empty($_POST))
		{
			$where['kodeproduk'] = $this->input->post('id');
			$this->db->delete("tbl_produk",$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Menghapus Data Produk
				</div>");
			header('location:'.base_url().'Master/dataproduk');

		}else $this->error();
	}

	public function hapuspeminjaman(){
		if(isset($_POST) && !empty($_POST))
		{
			$where['kodepeminjaman'] = $this->input->post('id');
			$this->db->delete("tbl_peminjaman",$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Menghapus Data Kendaraan
				</div>");
			header('location:'.base_url().'Master/datapeminjaman');

		}else $this->error();
	}

	public function hapusbuku(){
		if(isset($_POST) && !empty($_POST))
		{
			$where['kodebuku'] = $this->input->post('id');
			$this->db->delete("tbl_buku",$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Menghapus Data Buku
				</div>");
			header('location:'.base_url().'Master/databuku');

		}else $this->error();
	}

	public function ubahanggota(){
		$where['id_anggota'] = $this->input->post('id');
		$data['anggota']=$this->db->get_where("tbl_anggota",$where);
		echo show_my_modal("anggota/modal_update","md_updt",$data);
	}

	public function ubahproduk(){
		$where['kodeproduk']=$this->input->post('id');
		$data['dataproduk']=$this->db->get_where("tbl_produk",$where);
		echo show_my_modal("produk/modal_update","md_updt",$data);
	}

	public function ubahpeminjaman(){
		$where['kodepeminjaman']=$this->input->post('id');
		$data['datapeminjaman']=$this->db->get_where("tbl_peminjaman",$where);
		echo show_my_modal("peminjaman/modal_update","md_updt",$data);
	}

	public function ubahbuku(){
		$where['kodebuku']=$this->input->post('id');
		$data['databuku']=$this->db->get_where("tbl_buku",$where);
		echo show_my_modal("buku/modal_update","md_updt",$data);
	}

	public function updateanggota(){
		if(isset($_POST) && !empty($_POST)){
			$where['id_anggota'] = $this->input->post('id_anggota');
			$data = array(
				'nama' => $this->input->post('nama'),
				'jabatan' => $this->input->post('jabatan'),
				'alamat' => $this->input->post('alamat'),
				'nomorhp' => $this->input->post('nomorhp'),
			);
			$this->db->update("tbl_anggota",$data,$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Merubah Data anggota
				</div>");
			header('location:'.base_url().'Master/dataanggota');
		}else $this->error();
	}

	public function updatedataproduk(){
		if(isset($_POST) && !empty($_POST)){
			$where['kodeproduk'] = $this->input->post('kodeproduk');
			$data = array(
				'namaproduk' => $this->input->post('namaproduk'),
				'hargaproduk' => $this->input->post('hargaproduk'),
				'jenisproduk' => $this->input->post('jenisproduk'),
				'stokproduk' => $this->input->post('stokproduk'),
			);
			$this->db->update("tbl_produk",$data,$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Merubah Data Produk
				</div>");
			header('location:'.base_url().'Master/dataproduk');
		}else $this->error();
	}

	public function updatedatapeminjaman(){
		if(isset($_POST) && !empty($_POST)){
			$where['kodepeminjaman'] = $this->input->post('kodepeminjaman');
			$data = array(
				'namapeminjaman' => $this->input->post('namapeminjaman'),
				'hargapeminjaman' => $this->input->post('hargapeminjaman'),
				'jenispeminjaman' => $this->input->post('jenispeminjaman'),
				'stokpeminjaman' => $this->input->post('stokpeminjaman'),
			);
			$this->db->update("tbl_peminjaman",$data,$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Merubah Data Kendaraan
				</div>");
			header('location:'.base_url().'Master/datapeminjaman');
		}else $this->error();
	}

	public function updatedatabuku(){
		if(isset($_POST) && !empty($_POST)){
			$where['kodebuku'] = $this->input->post('kodebuku');
			$data = array(
				'namabuku' => $this->input->post('namabuku'),
				'pengarang' => $this->input->post('pengarang'),
				'penerbit' => $this->input->post('penerbit'),
				'statussedia' => $this->input->post('statussedia'),
				'jumlahbuku' => $this->input->post('jumlahbuku'),
			);
			$this->db->update("tbl_buku",$data,$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Merubah Data Buku
				</div>");
			header('location:'.base_url().'Master/databuku');
		}else $this->error();
	}
}
