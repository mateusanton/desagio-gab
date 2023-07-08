<?php

namespace App\Http;

class Response
{
  private $httpCode = 200;

  private $headers = [];

  private $contentType = 'text/html';

  private $content;

  public function __construct($httpCode, $content, $contentType = 'text/html')
  {
    $this->content = $content;
    $this->httpCode = $httpCode;
    $this->setContentType($contentType);
  }

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
    $this->addHeader('Content-Type', $contentType);
  }

  public function addHeader($keys, $value)
  {
    $this->headers[$keys] = $value;
  }

  /**
   *
   * Método responsavel por enviar os headers
   */
  private function sendHeaders()
  {
    http_response_code($this->httpCode);

    foreach ($this->headers as $key => $value) {
      header($key . ':' . $value);
    }
  }


  /**
   *
   * Método responsavel por enviar a resposta para o usuário
   */
  public function sendResponse()
  {
    $this->sendHeaders();
    switch ($this->contentType) {
      case 'text/html':
        echo $this->content;
        exit;
    }
  }
}
