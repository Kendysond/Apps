<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{	
		$data['views'] = $this->counter->log('1111');
		$this->load->view('user/inc/header_view');
		$this->load->view('user/adddish_view');
		$this->load->view('user/inc/footer_view');
	}
}
