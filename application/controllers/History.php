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
 
class History extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['main_content'] = 'history';
		$this->load->view('includes/template', $data);
    }

}


