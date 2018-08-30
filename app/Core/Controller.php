<?php

class Controller
{
  public function views($view)
  {
    require_once '../app/Views/' . $view . '.php';
  }
}
