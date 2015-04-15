<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$this->load->view('user/inc/header_view');
		$this->load->view('user/home_view');
		$this->load->view('user/inc/footer_view');
	}
}
