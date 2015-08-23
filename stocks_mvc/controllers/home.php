<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index () {
		$data['total_startups'] = $this->m_subscriber_startups->get_total_subscriber_startups();
		$data['total_investors'] = $this->m_subscriber_investors->get_total_subscriber_investors();
		$this->load->view('home/landingPage', $data);
	}

	public function request () {
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			redirect();
			exit();
		} else {
			$this->_insert_request_invitation();
		}
	}

	private function _insert_request_invitation () {
		$invitation_type	= $this->input->post('invitation_type');
		$email				= $this->input->post('email');

		$data['email']		= $email;

		if ($invitation_type == 'startup') {
			if(!$this->m_subscriber_startups->is_email_registered_on_subscriber_startups($data['email'])) {
				$this->m_subscriber_startups->insert_subscriber_startups($data);
				$invitation_status = 'success';
			} else {
				$invitation_status = 'already';
			}
		} else {
			if(!$this->m_subscriber_investors->is_email_registered_on_subscriber_investors($data['email'])) {
				$this->m_subscriber_investors->insert_subscriber_investors($data);
				$invitation_status = 'success';
			} else {
				$invitation_status = 'already';
			}
		}

		$this->session->set_userdata(array('invitation_status' => 'registered'));

		$output['data']['invitation_status'] = $invitation_status;
		$this->load->view('parse_json', $output);
	}
}