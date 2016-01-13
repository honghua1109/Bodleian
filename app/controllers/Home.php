<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index(){
    $data = array();
    $this->template->title = 'Bodleian 당신의 또 다른 도서관'; // 감성 ㅍㅌㅊ?
    if(IS_REAL or trim($this->input->get_post('q')) == 'development'){
        $this->template->content->view('default/content', $data);
    }else{
        $this->template->content->view('default/content', $data);
    }
    // Publish the template
    $this->template->publish();
	}
}
