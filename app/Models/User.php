<?php

class User
{
  private $db;

  public function __construct()
  {
    $this->db = Database::getInstance();
  }

  public function index()
  {
    return $this->db->index('users');
  }
}
