<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->session->set_userdata("merchant_login",0);
		// $this->session->set_userdata("shike_login",0);
		// $this->session->set_userdata("admin_login",0);
	}

	public function index()
	{
		$this->out_data['qq'] = $this->db->query("select qq from qqkefu where type = 1")->row_array();
		$this->out_data['qq'] = $this->out_data['qq']['qq'];
		$this->load->view('mall/login_header');
		$this->load->view('login',$this->out_data);
		$this->load->view('mall/footer');
	}

	function check_login()
	{
		$result = array('status' => true, 'msg' => '');
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$password = md5($password);

		$query_merchant = $this->db->query("select * from seller where (user_name='{$name}' and passwd='{$password}') or (tel='{$name}' and passwd='{$password}')");
        $query_shike = $this->db->query("select * from user where user_name='{$name}' and password='{$password}' or phone='{$name}' and password='{$password}'");

		if($query_merchant->num_rows() > 0)
        {
            $query = $query_merchant->row_array();
            $result = array_merge($result, $query);
            $this->session->set_userdata('seller_id', $result['seller_id']);
            $this->session->set_userdata('user_name', $result['user_name']);
			$this->session->set_userdata('merchant_login', true);
			$this->session->set_userdata("shike_login",false);
			$this->session->set_userdata("admin_login",false);
        }
        elseif($query_shike->num_rows() > 0){
            $query = $query_shike->row_array();
            $result = array_merge($result, $query);
            $this->session->set_userdata('user_id', $result['user_id']);
            $this->session->set_userdata('user_name', $result['user_name']);
			$this->session->set_userdata('shike_login', true);
			$this->session->set_userdata('merchant_login', false);
			$this->session->set_userdata("admin_login",false);
        }
        else{
            $result = array('status' => false, 'msg' => '用户名或密码错误，请重新输入');
        }
		
		echo json_encode($result);
	}

	function logout()
	{
		$this->session->sess_destroy();
		header("Location: /login");
	}
}
