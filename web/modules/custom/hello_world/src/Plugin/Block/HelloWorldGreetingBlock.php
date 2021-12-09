<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\hello_world\HelloWorldGreeting;

/**
 * Class HelloWorldGreetingBlock
 * @package Drupal\hello_world\Plugin\Block
 */
class HelloWorldGreetingBlock extends BlockBase implements ContainerFactoryPluginInterface
{
  /**
   * @var \Drupal\hello_world\HelloWorldGreeting
   */
  protected $greeting;

  /**
   * HelloWorldGreetingBlock constructor.
   * @param array $configuration. A configuration array containing information about the plugin instance.
   * @param $plugin_id. The plugin_id for the plugin instance.
   * @param $plugin_definition. The plugin implementation definition.
   * @param \Drupal\hello_world\HelloWorldGreeting $greeting. The greeting service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, HelloWorldGreeting $greeting)
  {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->greeting = $greeting;
  }

  /**
   * @return array
   */
  public function build()
  {
    return [
      '#markup' => $this->greeting->getGreetingComponent(),
    ];
  }

  /**
   * @param ContainerInterface $container
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   * @return HelloWorldGreetingBlock|static
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
  {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('hello_world.greeting')
    );
  }
}
