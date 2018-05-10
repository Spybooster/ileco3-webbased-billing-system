<?php
	function site_template($content, $data)
	{
		$ci =& get_instance();
		$ci->load->view('template/site/header_view', $data);
		$ci->load->view('site/'. $content);
		$ci->load->view('template/site/footer_view', $data);
	}


	function admin_template($content, $data)
	{
		$ci =& get_instance();
		$ci->load->view('template/admin/header_view', $data);
		$ci->load->view('admin/'. $content, $data);
		$ci->load->view('template/admin/footer_view', $data);
	}

function consumer_template($content, $data)
	{
		$ci =& get_instance();
		$ci->load->view('template/consumer/header_view', $data);
		$ci->load->view('consumer/'. $content, $data);
		$ci->load->view('template/consumer/footer_view', $data);
	}


	function get_components($id)
	{
			$ci =& get_instance();
			return $ci->db->where('component_category_id', $id)->get('components');

	}

function admin_info()
{
    $ci =& get_instance();
    if($ci->session->userdata('user_id')){
        $query = $ci->db->where('id',$ci->session->userdata('user_id'))->get('users')->row();
        return $query;
    }else{
        return false;
    }

}

function consumer_info()
	{
		$ci =& get_instance();
		if($ci->session->userdata('user_id')){
		$query = $ci->db->where('id',$ci->session->userdata('user_id'))->get('consumers')->row();
			return $query;
		}else{
			return false;
		}
	}

	// function user_info(){
 //        $ci =& get_instance();
 //        if($ci->session->userdata('logged')){
 //            $user_id = $ci->session->userdata('user_id');
 //            return $ci->db->where('consumer_id', $user_id)->get('users')->row();
 //        }else{  
 //            return false;
 //        }
 //    }



