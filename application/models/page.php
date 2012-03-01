<?php
class Page_Model extends CI_Model {
	/**
	 * Array containing all the page data that has been loaded thus far.
	 */
	private $pages = array();

	public function __construct()
	{
		$this->load->database();
	}

	public function GetContent() {
		$query = $this->db->get('Pages');
		$this->page = $query->result_array();
	}
}
