<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	public $user;

	public function get_users($id = 0) {
		if ($id > 0) {
			$query = $this->db->get_where('users', array('userID' => $id));

			if ($query->num_rows() > 0) {
				return $query->row();
			}
			return false;
		} else {
			$query = $this->db->get('users');

			if ($query->num_rows() > 0) {
				
				//create an array to store users
				$users = array();

				//Loop through each row returned from the query
				foreach ($query->result() as $row) {
					$users[] = $row;
				}
				return $users;
			}
			return false;
		}
	}

	public function get_empty_user() {
		$user = (object) array(
			'username' => '',
			'firstname' => '',
			'surname' => '',
			'password' => '',
			'email' => '',
			'activeState' => 0,
			'rightGroup' => 0
		);

		return $user;
	}

	public function save_user($id = 0) {
		$this->user = array(
			'username' => $this->input->post('username'),
			'firstname' => $this->input->post('firstname'),
			'surname' => $this->input->post('surname'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email'),
			'activeState' => 0,
			'rightGroup' => 0
		);

		if ($id > 0) {
			$this->update_user($id);
		} else {
			$this->insert_user();
		}
	}

	public function insert_user() {
		$this->db->insert('users', $this->user);
	}

	public function update_user($id) {
		$this->db->update('users', $this->user, array('userID' => $id));
	}

	public function delete_user($id) {
		$this->db->delete('users', array('userID' => $id));
	}
}