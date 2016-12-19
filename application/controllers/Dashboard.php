<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Dashboard
*/
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		var_dump($user_profile)
	}
}