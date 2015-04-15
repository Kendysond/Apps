<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dish extends CI_Controller {

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
	public function index(){
		$this->load->view('user/inc/header_view');
		
		$id = $this->uri->segment(2);
		if ($id == null) {
			
			$data['dishes'] = $this->statsclass->dishes();
			$this->load->view('user/home_view',$data);


		}else{
			$params = ['id' => $id];
            $this->load->library('obj/Dishobj',$params ,'DSH');
            $data['dish'] = new $this->DSH($params);

            if ($data['dish']->dish_id == "") {
            	$this->load->view('user/404_view');
			}else{
				$data['views'] = $this->counter->log($id);
				$this->load->view('user/dish_view',$data);
			}
			
		}
		$this->load->view('user/inc/footer_view');
	}
	public function error()
	{	
		$this->load->view('user/inc/header_view');
		$this->load->view('user/404_view');
		$this->load->view('user/inc/footer_view');
	}
}
