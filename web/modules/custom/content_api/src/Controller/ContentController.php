<?php

namespace Drupal\content_api\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ContentController
 * @package Drupal\content_api\Controller
 */
class ContentController extends ControllerBase
{
  function intro() {
    return [
      '#title' => 'content API',
      '#markup' => 'Content api module for custom REST API',
    ];
  }
}
