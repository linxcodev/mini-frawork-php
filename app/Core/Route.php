<?php

class Route
{
  protected $controller = 'HomeController';
  protected $method     = 'index';
  protected $param      = [];

  function __construct()
  {
    if (isset($_GET['url'])) {
      $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
    } else {
      $url[0] = 'home';
    }

    $url[0] = ucfirst($url[0]) . 'Controller';

    // mengecek file controller
    if ( file_exists('../app/Controllers/' . $url[0] . '.php')) {
      $this->controller = $url[0];
    } else {
      return require_once '../app/Views/eror/404.php';
    }

    // masuk ke file controller
    require_once '../app/Controllers/' . $this->controller . '.php';

    // membuat obj
    $this->controller = new $this->controller;

    // mengecek method Controller
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
      } else {
        return require_once '../app/Views/eror/404.php';
      }
    }

    // mengambil param
    unset($url[0]);
    unset($url[1]);
    $this->param = $url;

    call_user_func_array([$this->controller, $this->method], $this->param);
  }
}
