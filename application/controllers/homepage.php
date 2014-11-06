<?php

class Homepage extends CI_Controller {

   function index()
   {
      $data['page_title'] = 'Your title';
      $this->load->view('header');
 
    
   }

}
?>