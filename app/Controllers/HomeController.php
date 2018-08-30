<?php

class HomeController extends Controller
{
  public function index()
  {
    $user = $this->models('User');

    return $this->views('home', ['nama' => $user->name, 'umur' => $user->age]);
  }

  public function profile()
  {
    $user = $this->models('User');

    echo "$user->name $user->age";
  }
}
