<?php

class HomeController extends Controller
{
  public function index()
  {
    return $this->views('home');
  }
}
