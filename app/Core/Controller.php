<?php

class Controller
{
  public function views($view, $data = [])
  {
    require_once '../app/Views/' . $view . '.php';
  }

  public function models($model)
  {
    require_once '../app/Models/' . $model . '.php';

    return new $model;
  }
}
