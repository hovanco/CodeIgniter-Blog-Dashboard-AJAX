<!-- 

public function fetch()
	{
		$posts = $this->user_model->get_entries();
		echo json_encode($posts);
	}


	public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('first_name', 'First_Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last_Name', 'required');
			$this->form_validation->set_rules('phone_number', 'Phone_Number', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('user_name', 'User_Name', 'required');
			// $this->form_validation->set_rules('img', 'Profile Picture', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				$config['upload_path'] = APPPATH . '/Fileupload/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '100000';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload("avatar")) {
					$data = array('res' => "error", 'message' => $this->upload->display_errors());
				} else {
					$ajax_data = $this->input->post();
					$ajax_data['avatar'] = $this->upload->data('file_name');

					if ($this->user_model->insert_entry($ajax_data)) {
						$data = array('res' => "success", 'message' => "Data added successfully");
					} else {
						$data = array('res' => "error", 'message' => "Failed to add data");
					}
				}
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	} -->
