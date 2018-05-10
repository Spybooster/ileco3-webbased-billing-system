<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	private $table = "consumers";



	function index()
	{
		$accounts = $this->db->order_by('lname')->get($this->table);
		admin_template('account/index', compact('accounts'));	
	}

	function create()
	{
		admin_template('account/create', "");	
	}

	function bill($pole=null)
	{
		
		$poles = $this->db->group_by('pole')->get($this->table);
		if($pole)
		{
			$accounts = $this->db->where('pole', $pole)->order_by('lname')->get($this->table);
		}else{
			$this->session->set_flashdata('note', "<div class='alert alert-info'>Note: SORT by POLE</div>");
			$accounts = $this->db->order_by('lname')->get($this->table);
		}
		admin_template('account/billing', compact('accounts', 'poles'));
	}

	function bill_store()
	{
		$currents = $this->input->post('current');
		$consumer_ids = $this->input->post('account_id');
		//echo count($currents);
		//exit();
		// var_dump($currents);
		// exit();
		for($i=0; count($currents) > $i; $i++)
		{

			if($currents[$i] > 0)
			{
				$previous = $this->db->where('consumer_id', $consumer_ids[$i])->order_by('id', 'DESC')->get('billings');
				$prevdate = $this->db->where('consumer_id', $consumer_ids[$i])->order_by('id', 'DESC')->get('billings');

				if($previous->num_rows())
				{
					$previous = $previous->row()->present_use;
				}else{
					$previous = 0;
				}

				if($prevdate->num_rows())
				{
					$prevdate = $prevdate->row()->date_from;
				}else{
					$prevdate = 0000-00-00;
				}

				$current_use = $currents[$i];
				$total = $this->total_bill($previous, $current_use);

				$data = array(
					'consumer_id' => $consumer_ids[$i], 
					'month' => $this->input->post('month'),
					'due_date' => $this->input->post('due_date'),
					'disconnection' => $this->input->post('disconnection'),
					'present_use' => $currents[$i],
					'date_from' => $prevdate,
					'date_to' => date('Y-m-d'),
					'previous_use' => $previous,
					'total_consume' => $total,
					'status' => 'pending'
				);

				$this->db->insert('billings', $data);
				$bill_id = $this->db->insert_id();
				$this->send_sms($consumer_ids[$i], $bill_id, $total);

			}
		}
		redirect('admin/Account/bill');
	}

	function total_bill($previous, $currents)
	{
		$categories = $this->db->get('component_category');
		$used =  (int)$currents - (int)$previous;

		$first_counter = 0;
		$total = 0;
		$taxable_total = 0;
		$others = 0;

		foreach($categories->result() as $category):
			$first_counter++;
						
			$components = get_components($category->id);
			$count = 0;
				
			foreach($components->result() as $component): 
				$amount = $used * $component->price;
			
				if($component->taxable){
				
					$taxable_total += $amount;
				
				}

				if($category->name == "Others")
				{
					$others += $amount;
				}
				
				
				if($component->name == 'Distribution'){
					
					$amount = $taxable_total * $component->price;
				
				}

				if($component->name == 'Others'){
					
					$amount = $others * $component->price;
				
				}
				
				
				$total += $amount;
				
				$count++;
			
			endforeach;
		endforeach;

		return $total;
	}


	function send_sms($consumer_id, $bill_id)
	{

		$consumer = $this->db->where('id', $consumer_id)->get('consumers')->row();
		$bill = $this->db->where('id', $bill_id)->get('billings')->row();
		$month = $bill->month;
		$prev = $bill->previous_use;
		$pres = $bill->present_use;
		$total = $bill->total_consume;
		$due = $bill->due_date;
		$name = $consumer->fname . ' ' . $consumer->lname;
		$number = $consumer->number;
		$message = "Hi! Mr/Ms " . $name . " You're Billing Statement for " . $month . ' in the amount of Php' . $total  . " is already available. Due-Date is on " . $due . ". This is a system generated message from ILECO III. Please Do not reply.";

		$data = array(
			'number' => $number,
			'message' => $message,
			'status' => 'pending'
		);

		$this->db->insert('sms_data', $data);
	}


	function store()
	{

		$this->db->insert($this->table, $this->input->post());
		redirect(base_url('admin/account'));
	}

	function edit($id)
	{
		$account = $this->db->where('id', $id)->get($this->table)->row();
		admin_template('account/edit', compact('account'));		
	}

	// function edit_status($id)
	// {
	// 	$billing = $this->db->where('id', $id)->get('billings')->row();
	// 	admin_template('account/edit_status', compact('billing'));		
	// }


	function update($id)
	{
		$this->db->where('id', $id)->update($this->table, $this->input->post());
		redirect(base_url('admin/account'));
	}

	// function update_status($id)
	// {
	// 	$this->db->where('id', $id)->update('billings', $this->input->post());
	// 	redirect(base_url('admin/account'));
	// }



	function delete($id)
	{
		$this->db->where('id', $id)->delete($this->table);
		redirect(base_url('admin/account'));
	}

	function show($id)
	{
		$account = $this->db->where('id', $id)->get($this->table)->row();
		$billings = $this->db->where('consumer_id', $id)->order_by('id', 'DESC')->get('billings');
		admin_template('account/show', compact('account', 'billings'));		
	}

	function createbill($id)
	{
		$account = $this->db->where('id', $id)->get($this->table)->row();
		$categories = $this->db->get('component_category	');
		$previous = $this->db->where('consumer_id', $id)->order_by('id', 'DESC')->get('billings')->row();
		if(count($previous)){
			$previous = $previous->previous_use;
		}else{
			$previous = 0;
		}
		admin_template('account/create_bill', compact('account', 'previous','categories'));		
	}

	function showbill($id)
    {
    	//$account = $this->db->where('id', $id)->get($this->table)->row();
		$categories = $this->db->get('component_category	');
		$previous = $this->db->where('id', $id)->order_by('id', 'DESC')->get('billings')->row();
		//$consumer = $this->db->join('consumers', 'consumer_id = consumerid')->get($this->table)->row();
		$consumer = $this->db->select('*')->from('billings')->join('consumers', 'consumers.id = billings.consumer_id', 'LEFT')->where('billings.id', $id)->get()->row();
		$used = $previous->present_use - $previous->previous_use;

        admin_template('account/show_bill', compact('previous','categories', 'used', 'consumer'));
    }	

    function storebill($id)
    {
        $this->db->insert($this->table, $this->input->post());
        redirect(base_url('admin/account'));
    }
}
