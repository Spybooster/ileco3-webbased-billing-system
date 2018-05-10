<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bills extends CI_Controller {


function __construct()
	{
		parent::__construct();
		
		$this->session->userdata('user_id');
	}


function index()
	{
		$data = $this->db->order_by('id')->get('consumers');
		$billings = $this->db->where('consumer_id', $this->session->userdata('user_id'))->order_by('id', 'DESC')->get('billings');
		$presents = $this->db->where('consumer_id', $this->session->userdata('user_id'))->order_by('id', 'DESC')->get('billings')->row();
		consumer_template('bills/view', compact('billings', 'data', 'presents'));		
	}


function showbill($id)
    {
    	$data = $this->db->order_by('id')->get('consumers');
    	//$account = $this->db->where('id', $id)->get($this->table)->row();
		$categories = $this->db->get('component_category');
		$previous = $this->db->where('id', $id)->order_by('id', 'DESC')->get('billings')->row();
		$used = $previous->present_use - $previous->previous_use;

        consumer_template('bills/bill_view', compact('previous','categories', 'used', 'data'));
    }	

}