<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class merchant_wait_deliverGoods_details extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{


		$this->out_data['con_page'] = 'merchant/wait_deliverGoods_details';
		$this->load->view('merchant_default', $this->out_data);
	}
}
