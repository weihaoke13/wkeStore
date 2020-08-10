<?php


class Cart
{
    public $db = null;

    //access database
    public function __construct(DBController $db){
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public function insertIntoCart($params = null, $table = "cart"){

    }





}