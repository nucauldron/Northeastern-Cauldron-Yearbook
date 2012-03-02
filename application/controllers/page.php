<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index() {
		$data['title'] = "This is the title";
		$this->load->view('header');
		$this->load->view('navigation');
		$this->load->view('page_view', $data);
		$this->load->view('footer');
	}

	/**
	 * View for the controller.
	 */
	public function view($page = 'home') {
		if (!file_exists('application/views/pages/'.$page.'.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('header');
		$this->load->view('page', $data);
		$this->load->view('footer');
	}
}
