<?php
require_once("Models/account.php");
class accountController
{
	var $account_model;
	function __construct()
	{
		$this->account_model = new account();
	}

	public function list()
	{
		$data = array();
		$data = $this->account_model->All(); 
		require_once("Views/index.php");
		
	}

	public function add()
	{
		require_once("Views/index.php");
		
	}
	public function store()
	{
		$data = array(
			'username' => $_POST['username'],
			'password' => $_POST['password'],
            'hoten' => $_POST['hoten'],
            'sdt' => $_POST['sdt'],
            'email' => $_POST['email'],
            'idquyen' => $_POST['idquyen'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->account_model->store($data);
		header('location: ?act=account&xuli=list');
	}

	
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->account_model->xoa($_GET['id']);
		}
		header('location: ?act=account&xuli=list');

	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->account_model->find($id);
		require_once("Views/index.php");
		
	}
	public function update()

	{
		$data = array(
			'username' => $_POST['username'],
			'password' => $_POST['password'],
            'hoten' => $_POST['hoten'],
            'sdt' => $_POST['sdt'],
            'email' => $_POST['email'],
            'idquyen' => $_POST['idquyen'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->account_model->update($data);
		header('location: ?act=account&xuli=list');
	}
    function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $check = $this->account_model->check_login($username, $password);
        if (count($check))
        {
            $_SESSION['loginAdmin'] = true;
            header('location: ?act=dashboard');
        }
        else
        {
            echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác.') </script>";
            header('location: ?act=login');
           
        }
    }

	function logout()
	{
		unset($_SESSION['loginAdmin']);
		header('location: ?act=login');
	}
}
