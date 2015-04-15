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

class Ajax extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('forms_model');
	}
	public function generate_id(){
		//
  		$prefix = 'ds';
		//
		$sql = "SELECT * FROM `ids`ORDER BY id DESC LIMIT 1";
  		$lastsuffix = $this->forms_model->sql_get_value($sql,'ids');
  		$suffix = $lastsuffix + 1;
  		$newid = $prefix.$suffix;
  		$data = ['ids' => $suffix ];
		$result = $this->forms_model->insert_array('ids',$data);
		
		return $newid;
	}
	public function add_dish(){
		$this->load->helper('email');
		$data = $this->input->post();
		
		if ($data['email'] != "" && valid_email($data['email'])){
		   	$email = ['email' => $data['email']];
		   	$result = $this->forms_model->exist_array('emails',$email);

		   	if ($result > 0) {
		   	 
		   	}else{
		      $result = $this->forms_model->insert_array('emails',$email);
			}
		}elseif ($data['email'] != "" && !valid_email($data['email'])) {
			$this->output->set_output(json_encode(['result' => 'emailerror']));
			return false;
		}

		$insert['name'] = @mysql_real_escape_string($data['name']);
		$insert['state'] = @mysql_real_escape_string($data['state']);
		$insert['lga'] = @mysql_real_escape_string($data['lga']);
		$insert['ingredients'] = @mysql_real_escape_string($data['ingredients']);
		$insert['procedures'] = @mysql_real_escape_string($data['procedures']);
		$insert['fullname'] = @mysql_real_escape_string($data['fullname']);
		$insert['email'] = @mysql_real_escape_string($data['email']);
		$insert['gender'] = @mysql_real_escape_string($data['gender']);
		$insert['id'] = $this->generate_id();
		$email = ['email' => $insert['email']];

		//$result = $this->forms_model->insert_array('dishes',$insert);
		
		//$this->output->set_output(json_encode([ 'result' => 'success','id' => $insert['id']]));
		return false;
	}















}







