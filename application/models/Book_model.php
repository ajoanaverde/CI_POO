<?php
class Book_model extends CI_Model
{

    private $id;
    private $title;
    private $author;
    private $description;
    private $price;


    //////////////////
    // CONSTRUCTOR //
    ////////////////

    public function __construct()
    {
        $this->load->database();
        $this->load->model('entities/book');
    }

    //////////////////
    //   CREATE    //
    ////////////////

    public function get()
    {
        $query = $this->db->get('book');
        return $query->custom_result_object('book');
    }


    public function get_by_id($id)
    {
        $query = $this->db->get_where('book', array('id' => $id));
        return $query->custom_row_object($id, 'book');
    }
}
