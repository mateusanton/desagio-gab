<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{

  public static function getHeader()
  {
    return View::render('pages/header');
  }

  public static function getFooter()
  {
    return View::render('pages/footer');
  }

  /**
   * Retorna conteudo da page
   * @return string
   */
  public static function getPage($content, $title)
  {
    return View::render('pages/page', [
      "title" => $title,
      "header" => self::getHeader(),
      "content" => $content,
      "footer" => self::getFooter(),
    ]);
  }
}
