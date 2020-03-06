<?php

class Book_controller extends CI_Controller
{

    /////////////////
    //  CONSTRUCT //
    ///////////////

    public function __construct()
    {
        parent::__construct();
        $this->load->model('book_model');
    }

    /////////////////
    //   GET ALL  //
    ///////////////

    public function index()
    {
        $data['books'] = $this->book_model->get();
        // var_dump($data);
        $this->load->view('book/index', $data);
    }

    /////////////////
    //   GET ONE  //
    ///////////////

    public function show($id)
    {
        $data['book'] = $this->book_model->get_by_id();

        $this->load->view('book/show');
    }

}