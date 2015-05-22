<?php
class Profile_form extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //$this->load->model('profile_form_model');
    $this->config->set_item('banner', 'Global News Banner');


  }

  public function index()
  {  /*
    $data['news'] = $this->news_model->get_news();
    $data['title'] = 'News archive';

    $this->load->view('profile_form/index', $data);
    */
    $this->load->view('profile_form/index');
  //  $data['title'] = 'Profile Form';
    /*
    $data['feed'] = $this->posts_model->get_feed();
    $data['title'] = 'Rss Feed';

    $this->load->view('feed/index', $data);
    */




}


}
