<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SinglePart extends Application {

    function __construct() {
        parent::__construct();

        $this->load->model('Parts_model');
    }

	// Renders the availabled pieces in a grid view
    public function index($id = 0) {
        $role = $this->session->userdata('userrole');
        if ($role == 'boss' || $role == 'supervisor' || $role == 'worker') {
            if ($id > 0) {
                $record = $this->Parts_model->selectById($id)[0];
                    $this->data['id'] = $record['id'];
                    $this->data['modelpiece'] = $record['model'] . $record['piece'] . '.jpeg';
                    $this->data['plant'] = $record['plant'];
                    $this->data['stamp'] = $record['stamp'];
                    $this->data['model'] = $record['model'];
                    $this->data['piece'] = $record['piece'];
                
                $this->data['pagebody'] = 'singlepart';
                $this->render();
            } else {
                redirect('parts');
            }
        } else {
            redirect('welcome');
        }
    }

}
