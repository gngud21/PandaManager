<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Roles extends Application {
	
	// sets the role of the user
	public function actor($role = ROLE_GUEST) {
		$this->session->set_userdata('userrole', $role);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
