<?php

namespace App\Http\Router;

use App\Http\Request;

class Router
{

  /**
   * URL completa do projeto
   */
  private $url = '';

  /**
   * Prefixo de todas as rotas
   */
  private $prefix = '';

  /**
   *
   * Indice de rotas
   */
  private $routes = [];

  /**
   * Instancia do request
   */
  private $request;

  public function __construct($url)
  {
    $this->request = new Request();
    $this->url = $url;
    $this->setPrefix();
  }

  private function setPrefix()
  {
    // informações da url
    $parseUrl = parse_url($this->url);

    //define prefix
    $this->prefix = $parseUrl['path'] ?? '';
  }

  private function addRoute($method, $route, $params = [])
  {
    echo "<pre>";
    print_r($method);
    echo "</pre>";
    echo "<pre>";
    print_r($route);
    echo "</pre>";
    echo "<pre>";
    print_r($params);
    echo "</pre>";
  }

  /**
   * responsavel por definir uma roda de GET
   */
  public function get($route, $params = [])
  {
    return $this->addRoute('GET', $route, $params);
  }
}
