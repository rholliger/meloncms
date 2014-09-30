<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->helper('form');
	}

	public function index() {
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/articles');
		$this->load->view('admin/templates/footer');
	}

	public function new_article() {

		$data = array(
				'pageTitle' => 'Neuer Artikel'
		);

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/article', $data);
		$this->load->view('admin/templates/footer');	
	}
}

/* End of file articles.php */