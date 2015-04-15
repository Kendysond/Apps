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

class Checklogin {

	public function confirm(){
		$CI = &get_instance();
		$id = $CI->session->userdata('user_id');
		if(!isset($id)){
			$CI->session->set_flashdata('msg_box', 'warning');
			$CI->session->set_flashdata('msg_msg', 'You must be logged in to continue');
			redirect(base_url('auth/login'));
		}
	}

	public function loggedin(){
		$CI = &get_instance();
		$id = $CI->session->userdata('user_id');
		if(isset($id)){
			redirect(base_url('auth/login'));
		}
	}
}