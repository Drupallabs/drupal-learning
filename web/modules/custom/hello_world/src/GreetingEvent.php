<?php

namespace Drupal\hello_world;
use Symfony\Component\EventDispatcher\Event;

class GreetingEvent extends Event {
  const EVENT = 'hello_world.greeting_event';

  /**
   * The greeting message
   * @var string
   */
  protected $message;

  /**
   * @return string
   */
  public function getMessage(): string
  {
    return $this->message;
  }

  /**
   * @param string $message
   */
  public function setMessage(string $message): void
  {
    $this->message = $message;
  }

}

