<?php

class template {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
    }

    function back_end($template, $data = null) {
        $data['_content'] = $this->_ci->load->view($template, $data, true);
        $data['_head'] = $this->_ci->load->view('template_back_end/header', $data, true);
        $data['_navbar'] = $this->_ci->load->view('template_back_end/navbar', $data, true);
        $data['_sidebar'] = $this->_ci->load->view('template_back_end/sidebar', $data, true);
        $data['_footer'] = $this->_ci->load->view('template_back_end/footer', $data, true);
        $this->_ci->load->view('template_back_end/body.php', $data);
    }
}