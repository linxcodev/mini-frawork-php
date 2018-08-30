<?php

class HomeController extends Controller
{
  public function index()
  {
    return $this->views('home');
  }

  public function profile()
  {
    $user = $this->models('User');
    
    echo "$user->name $user->age";
  }
}
