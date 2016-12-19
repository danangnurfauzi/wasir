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

	public function __construct()
	{
		parent::__construct();
		$this->load->library('facebook', array('appId' => '369227166775039', 'secret' => 'bdfdf85349fdeeed5e3cd83ab9975866'));
		$this->user = $this->facebook->getUser();
	}

	public function index()
	{
		$data['login_url'] = $this->facebook->getLoginUrl();
		$this->load->view('welcome_message',$data);
	}

	public function signup()
	{
		$this->load->view('signup_view');
	}

	public function twitter()
	{
		
	}

}
