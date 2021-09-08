<?php

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\hello_world\HelloWorldGreeting;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for the greeting message
 */
class HelloWorldController extends ControllerBase {
  /**
   * The greeting service
   * @var \Drupal\hello_world\HelloWorldGreeting
   */
  protected $greeting;

  /**
   * HelloWorldController constructor
   * @param \Drupal\hello_world\HelloWorldGreeting $greeting
   */
  public function __construct(HelloWorldGreeting $greeting) {
    $this->greeting = $greeting;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): HelloWorldController
  {
    return new static(
      $container->get('hello_world.greeting')
    );
  }

  /**
   * Hello world drupal
   * @return array
   * Our message.
   */
  public function helloWorld()
  {
    return $this->greeting->getGreetingComponent();
  }
}
