<?php
/**
 * KENDYSON
 *
 * Copyright (c) 2014, Kendyson Douglas
 *
 * @package	CodeIgniter
 * @author	KENDYSON
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @link	http://kendyson.com
 * @since	Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function login(){
		$this->load->view('login/login_view');
	}
	public function facebook(){
		$this->load->library('facebook');
	}

	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

