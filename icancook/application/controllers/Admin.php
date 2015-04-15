<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		// $this->load->view('admin/inc/header_view');
		$this->load->view('admin/page_view');
		// $this->load->view('admin/inc/footer_view');
	}
}
