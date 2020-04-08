<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		$url = "https://api.covid19api.com/summary";

		$covid_json_data = file_get_contents($url);
		
		$covid_array = json_decode($covid_json_data, true);

		$data = array(
			'covid_global' => $covid_array['Global'],
			'covid_countries' => $covid_array['Countries'],
		);

		$this->load->view('index_view', $data);
	}
}
