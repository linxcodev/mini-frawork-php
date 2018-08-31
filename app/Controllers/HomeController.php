<?php

class HomeController extends Controller
{
  public function index()
  {
    return $this->views('home');
  }

  public function user()
  {
    $user = $this->models('User')->index();

    return $this->views('user', ['users' => $user]);
  }
}
