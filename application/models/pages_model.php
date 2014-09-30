<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model {

	public $page;

	/*public function get_pages($id = 0) {
		if ($id > 0) {
			$query = $this->db->get_where('pages', array('pageID' => $id));

			if ($query->num_rows() > 0) {
				return $query->row();
			}
			return false;
		} else {
			$query = $this->db->get('pages');

			if ($query->num_rows() > 0) {
				
				//create an array to store users
				$pages = array();

				//Loop through each row returned from the query
				foreach ($query->result() as $row) {
					$pages[] = $row;
				}
				return $pages;
			}
			return false;
		}
	}*/

	public function get_page($id) {
		$query = $this->db->get_where('pages', array('pageID' => $id));

		if ($query->num_rows() > 0) {
			return $query->row();
		}
		return false;
	}

	public function count_pages() {
		return $this->db->count_all('pages');
	}

	public function get_pages($limit, $start) {
		$this->db->limit($limit, $start);
		$query = $this->db->get('pages');

			if ($query->num_rows() > 0) {
				
				//create an array to store users
				$pages = array();

				//Loop through each row returned from the query
				foreach ($query->result() as $row) {
					$pages[] = $row;
				}
				return $pages;
			}
		return false;
	}

	public function save_page($id = 0) {
		$this->page = array(
				'title' => $this->input->post('pageTitle'),
				'content' => $this->input->post('pageContent'),
				'metaKeywords' => $this->input->post('metaKw'),
				'metaDescription' => $this->input->post('metaDesc')
		);

		if ($id > 0) {
			$this->update_page($id);
		} else {
			$this->insert_page();
		}
	}

	public function insert_page() {
		$this->db->insert('pages', $this->page);
	}

	public function update_page($id) {
		$this->db->update('pages', $this->page, array('pageID' => $id));
	}

	public function delete_page($id) {
		$this->db->delete('pages', array('pageID' => $id));
	}
}