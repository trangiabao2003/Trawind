<?php
require_once("Models/chudetour.php");
class chudetourController
{
	var $chudetour_model;
	function __construct()
	{
		$this->chudetour_model = new chudetour();
	}

	public function list()
	{
		$data = array();
		$data = $this->chudetour_model->All(); 
		require_once("Views/index.php");
		
	}

	public function add()
	{
		require_once("Views/index.php");
		
	}
	public function store()
	{
		$data = array(
			'machude' => $_POST['machude'],
			'tenchude' => $_POST['tenchude']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->chudetour_model->store($data);
		header('location: ?act=chudetour&xuli=list');
	}

	
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->chudetour_model->xoa($_GET['id']);
		}
		header('location: ?act=chudetour&xuli=list');

	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->chudetour_model->find($id);
		require_once("Views/index.php");
		
	}
	public function update()

	{
		$data = array(
			'machude' => $_POST['machude'],
			'tenchude' => $_POST['tenchude'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->chudetour_model->sua($data);
		header('location: ?act=chudetour&xuli=list');
	}
}
