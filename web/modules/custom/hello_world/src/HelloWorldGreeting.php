<?php

namespace Drupal\hello_world;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class HelloWorldGreeting {
  use StringTranslationTrait;

  /**
   * The config factory
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The event dispatcher
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  protected $eventDispatcher;

  /**
   * HelloWorldGreeting constructor
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   * The config factory
   *
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher
   * The event dispatcher
   */
  public function __construct(ConfigFactoryInterface $config_factory, EventDispatcherInterface $eventDispatcher) {
    $this->configFactory = $config_factory;
    $this->eventDispatcher = $eventDispatcher;
  }

  /**
   * Returns the greeting render array
   */
  public function getGreetingComponent(): array
  {
    $render = [
      '#theme' => 'hello_world_greeting'
    ];

    $config = $this->configFactory->get('hello_world.custom_greeting');
    $greeting = $config->get('greeting');

    if($greeting !== "" && $greeting) {
      $event = new GreetingEvent();
      $event->setMessage($greeting);
      $this->eventDispatcher->dispatch(GreetingEvent::EVENT, $event);
      $render['greeting'] = $event->getMessage();
      $render['overridden'] = TRUE;
      return $render;
    }

    $time = new \DateTime();
    $render['#target'] = $this->t('world');

    if ((int) $time->format('G') >= 00 && (int) $time->format('G') < 12) {
      $render['#greeting'] = $this->t('Good morning');
      return $render;
    }

    if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
      $render['#greeting'] = $this->t('Good afternoon');
      return $render;
    }

    if ((int) $time->format('G') >= 18) {
      $render['#greeting'] = $this->t('Good evening');
      return $render;
    }
  }
}

