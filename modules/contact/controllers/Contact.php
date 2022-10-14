<?php

class Contact extends Trongate{

	public function index(){
		// $this->view('contact');
		$data = $this->_get_input_data();
		$data['view_module'] = "contact";
		$data['view_file'] = "contact";
		$this->template('public', $data);
	}

	public function _get_input_data()
	{
		$data['name'] = post('full_name');
		$data['email'] = post('email');
		$data['desc'] = post('desc');
		return $data;
	}

	public function submit(){
		
		$this->validation_helper->set_rules('full_name', 'Full name','required|min_length[3]|max_length[10]');
		$this->validation_helper->set_rules('email', 'Email','required|valid_email');
		$this->validation_helper->set_rules('desc', 'Description','required|min_length[15]');

		$result = $this->validation_helper->run(); //true or false

		if($result)
		{
			echo "Well done<br>";
			echo json_encode($this->_get_input_data());
		}
		else
		{
			$this->index();
		}
		
	}
}