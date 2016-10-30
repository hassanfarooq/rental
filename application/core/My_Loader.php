<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Loader extends CI_Loader {

    public function site_template ($view, $data = array(), $return = false) {

        if($return){
            $content = '';
            $content .= $this->view('site/common/header', $data, $return);
            $content .= $this->view('site/'. $view, $data, $return);
            $content .= $this->view('site/common/footer', $data, $return);
            return $content;
        }

        $this->view('site/common/header', $data);
        $this->view('site/'. $view, $data);
        $this->view('site/common/footer', $data);

    }

    public function customer_template ($view, $data = array()) {
        $this->view('customer/common/header', $data);
        $this->view('customer/common/sidebar', $data);
        $this->view('customer/'. $view, $data);
        $this->view('customer/common/footer', $data);
    }
}