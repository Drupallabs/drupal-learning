<?php

namespace Drupal\hello_world;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class HelloWorldGreeting {
  use StringTranslationTrait;

  /**
   * The config factory
   * @var ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The event dispatcher
   * @var EventDispatcherInterface
   */
  protected $eventDispatcher;

  /**
   * HelloWorldGreeting constructor
   * @param ConfigFactoryInterface $config_factory
   * The config factory
   *
   * @param EventDispatcherInterface $eventDispatcher
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
      '#theme' => 'hello_world_greeting',
      '#greeting' => [
        '#contextual_links' => [
          'hello_world' => [
            'route_parameters' => []
          ],
        ]
      ]
    ];

    $config = $this->configFactory->get('hello_world.custom_greeting');
    $greeting = $config->get('greeting');

    if($greeting !== "" && $greeting) {
      $event = new GreetingEvent();
      $event->setMessage($greeting);
      $this->eventDispatcher->dispatch(GreetingEvent::EVENT, $event);
      $render['greeting']['#markup'] = $event->getMessage();
      $render['overridden'] = TRUE;
      return $render;
    }

    $time = new \DateTime();
    $render['#target'] = $this->t('world');
    $render['#attached'] = [
      'library' => [
        'hello_world/hello_world_clock',
      ],
    ];

    if ((int) $time->format('G') >= 00 && (int) $time->format('G') < 12) {
      $render['#greeting']['#markup'] = $this->t('Good morning');
      return $render;
    }

    if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
      $render['#greeting']['#markup'] = $this->t('Good afternoon');
      $render['##attached']['drupalSettings']['hello_world']['hello_world_clock']['afternoon'] = TRUE;
      return $render;
    }

    if ((int) $time->format('G') >= 18) {
      $render['#greeting']['#markup'] = $this->t('Good evening');
      return $render;
    }
  }
}

