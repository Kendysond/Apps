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

class Counter {

	public function log($id){
		$CI = &get_instance();
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$user_ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$user_ip = $_SERVER['REMOTE_ADDR'];
		}

		$after = 21600;
		$time = time();
		$check = [
			'ip' => $user_ip,
			'procedure_id' => $id
		];
		//
		$insert = [
			'ip' => $user_ip,
			'at' => $time,
			'procedure_id' => $id
		];
			
		$result = $CI->forms_model->exist_array('views',$check);

		if ($result > 0) {
			$lastvisit = $CI->forms_model->get_max_value('views',$check,'at');
			$timecheck = $lastvisit + $after;
			if ($time > $timecheck) {
				$inserted = $CI->forms_model->insert_array('views',$insert);
			}
			
		}else{
			$inserted = $CI->forms_model->insert_array('views',$insert);
		
		}

		$where = [ 'procedure_id' => $id ];
		$views = $CI->forms_model->no_rows('views',$where);
		
		return $views;
	}
	public function views($id){
		$CI = &get_instance();
		$where = [ 'procedure_id' => $id ];
		$views = $CI->forms_model->no_rows('views',$where);
		
		return $views;
	}
}