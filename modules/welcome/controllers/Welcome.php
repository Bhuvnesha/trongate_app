<?php
class Welcome extends Trongate {
 
    function index() {
        // $this->view('welcome');
        $data['view_module'] = "welcome";
        $data['view_file'] = "home_page_content";
        $this->template('public', $data);
    }

}