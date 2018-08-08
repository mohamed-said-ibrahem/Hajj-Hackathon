<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Developer Ebrahim Elsawy <eng.ebrahimelsawy@gmail.com> 
 *
 *
 * @copyright 2005-2018 Ebrahim Elsawy
 *
 *
 * @version 0.1 Beta
 */
 
class Home extends CI_Controller {

    public function __construct() {
		
        parent::__construct();
    }

    public function index() {
        $data['main_content'] = 'home';
        //set page title
        $data['pageTitle'] = "Nabd - نبض";
		// load view
		$this->load->view('includes/template', $data);
    }
	
	function get_user_data($user_ud=''){
        header('Content-Type: application/json; charset=utf-8');
        echo(json_encode($this->global_model->get_user_data_by_id($user_ud)));
    } 



}


