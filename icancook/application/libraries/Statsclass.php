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

class Statsclass {
	
	
    public function dishes(){
		$CI = &get_instance();
		$ids = $CI->forms_model->get_ids('dishes','dish_id');
		if (!empty($ids)) {
			foreach($ids as $k => $id){
	            $params = ['dish_id' => $id];
	            $CI->load->library('obj/Dishobj',$params ,'DSH');
	            $Obj[]  = new $CI->DSH($params);
	        }
		}
	    
        return @$Obj;
	}
	
}