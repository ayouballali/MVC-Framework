<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    // function get les element d'une table
    public function get_elements(){
      $this->db->query("select * from posts" );
       return $this->db->resultAll();
    }
  }