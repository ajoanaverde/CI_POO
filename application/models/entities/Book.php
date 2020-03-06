<?php

class Book
{

    ///////////////////
    //  properties  //
    /////////////////

    private $id;
    private $title;
    private $author;
    private $description;
    private $price;

    ///////////////////
    //      GET     //
    /////////////////

    public function __get($property)
    {
        if(isset($this->$property))
        {
            return $this->$property;
        }
    }

    ///////////////////
    //      SET     //
    /////////////////

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    ///////////////////
    //  properties  //
    /////////////////

    ///////////////////
    //  properties  //
    /////////////////

    ///////////////////
    //  properties  //
    /////////////////

    ///////////////////
    //  properties  //
    /////////////////

}
