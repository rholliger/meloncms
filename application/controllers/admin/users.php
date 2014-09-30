<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->helper('form');
		$this->load->model('users_model');
		$this->load->library('form_validation');
	}

	public function index() {

		$data = array(
				'users' => $this->users_model->get_users()
		);

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/users', $data);
		$this->load->view('admin/templates/footer');
	}

	public function new_user() {

		$data = array(
				'pageTitle' => 'Neuer Benutzer',
				'user' => $this->users_model->get_empty_user()
		);

		if ($this->input->post('submit')) {
			if ($this->_check_user(TRUE)) {
				$this->users_model->save_user();
				//$this->session->set_flashdata('success', 'successfully inserted!');
				redirect('admin/users');
			}	
		}

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/user', $data);
		$this->load->view('admin/templates/footer');
	}

	public function edit($id) {
		$data = array(
				'pageTitle' => 'Benutzer editieren',
				'user' => $this->users_model->get_users($id)
		);

		if ($this->input->post('submit')) {
			if ($this->_check_user(FALSE)) {
				$this->users_model->save_user($id);
				//$this->session->set_flashdata('success', 'successfully inserted!');
				redirect('admin/users');
			}	
		}

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/user', $data);
		$this->load->view('admin/templates/footer');	
	}

	public function delete() {
		$delete_id = $this->input->post('id');

		if ($delete_id > 0) {
			$this->users_model->delete_user($delete_id);
		} else {
			//error
		}
	}

	private function _check_user($new) {
		$this->form_validation->set_rules('username', 'Benutzername', 'required');
		$this->form_validation->set_rules('firstname', 'Vorname');
		$this->form_validation->set_rules('surname', 'Nachname');
		$this->form_validation->set_rules('email', 'E-Mail Adresse', 'required|valid_email');
		
		if ($new) {
			$this->form_validation->set_rules('password', 'Passwort', 'required|min_length[6]|matches[passwordConf]');
			$this->form_validation->set_rules('passwordConf', 'Passwort Confirmation', 'required|min_length[6]');
		}

		return $this->form_validation->run();
	}
}

/* End of file users.php */