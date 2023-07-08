<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\User;

class Home extends Page
{

  /**
   * Retorna conteudo da home
   * @return string
   */
  public static function getHome()
  {
    $obOrganization = new User();
    $content = View::render('pages/home', [
      "name" => $obOrganization->name,
      "description" => "Desafio vaga ultra",
    ]);

    return parent::getPage($content, 'Home');
  }
}
