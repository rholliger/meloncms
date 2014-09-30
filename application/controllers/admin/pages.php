<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->helper(array('form', 'date', 'text'));
		$this->load->model('pages_model');
		$this->load->library( array('form_validation', 'session', 'pagination', 'uri') );
	}

	public function index() {
		$page = $this->uri->segment(3);

		$config = array(
				'base_url' => base_url() . "admin/pages/",
				'total_rows' => $this->pages_model->count_pages(),
				'per_page' => 10
		);

		$this->pagination->initialize($config);

		$data = array(
				'pages' => $this->pages_model->get_pages($config['per_page'], $page),
				'links' => $this->pagination->create_links()
		);

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/pages', $data);
		$this->load->view('admin/templates/footer');
	}

	public function new_page() {
		$data = array(
				'pageTitle' => 'Neue Seite'
		);

		if ($this->input->post('submit')) {
			if ($this->_check_form()) {
				$this->pages_model->save_page();
				$this->session->set_flashdata('success', 'successfully inserted!');
				redirect('admin/pages/');
			}	
		}

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/page', $data);
		$this->load->view('admin/templates/footer');
	}

	public function edit($id) {
		$data = array(
				'pageTitle' => 'Seite editieren',
				'page' => $this->pages_model->get_page($id)
		);

		if ($this->input->post('submit')) {
			if ($this->_check_form()) {
				$this->pages_model->save_page($id);
				redirect('admin/pages/');
			}
		}

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/page', $data);
		$this->load->view('admin/templates/footer');
	}

	public function delete() {
		$delete_id = $this->input->post('id');

		if ($delete_id > 0) {
			$this->pages_model->delete_page($delete_id);
		} else {
			//error
		}
	}

	private function _check_form() {
		//Validation for a new or an edited page

		$this->form_validation->set_rules('pageTitle', 'Seitentitel', 'required|max_length[20]');

		return $this->form_validation->run();
	}
}

/* End of file pages.php */