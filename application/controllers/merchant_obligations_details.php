<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class merchant_obligations_details extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

        $act_id = $this->input->get('act_id');
        $this->out_data['act'] = $this->db->query("select * from activity where act_id=$act_id")->row_array();

		$this->out_data['con_page'] = 'merchant/obligations_details';
		$this->load->view('merchant_default', $this->out_data);
	}
}
