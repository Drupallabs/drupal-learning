<?php

namespace Drupal\basic_custom_module\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for basic custom module
 */

class BasicCustomExampleController extends ControllerBase {
  /**
   * Simple basic custom module controller method
   * @return array
   * Returns an array with a markup in the screen
   */

  public function basicCustom() {
    return [
      '#markup' => $this -> t('Another module here'),
    ];
  }
}
