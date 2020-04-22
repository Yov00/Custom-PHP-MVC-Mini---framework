<?php

  class Pages extends Controller {

    public function __construct(){
   
    }
    
    public function index()
    {
      $data = ['title'=>'Home'];
      return $this->view('pages/index',$data);
    }

    public function about()
    {
      $data = ['title'=>'About'];
      return $this->view('pages/about',$data);
    }
  }