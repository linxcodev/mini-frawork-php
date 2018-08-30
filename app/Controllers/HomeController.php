<?php

class HomeController extends Controller
{
  public function index()
  {
    echo 'ini halaman default';
  }

  public function test($test, $test2)
  {
    echo "$test $test2";
  }
}
