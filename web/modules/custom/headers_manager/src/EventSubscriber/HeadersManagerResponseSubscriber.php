<?php

namespace Drupal\headers_manager\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Class HeadersManagerResponseSubscriber
 * @package Drupal\headers_manager\EventSubscriber
 * Response subscriber to remove the X-Generator header tag.
 */
class HeadersManagerResponseSubscriber implements EventSubscriberInterface
{
  /**
   * Remove extra X-generator header on successful response
   * @param \Symfony\Component\HttpKernel\Event\FilterResponseEvent $event
   * The event to process
   */
  public function HeadersManagerOptions(FilterResponseEvent $event) {
    $response = $event->getResponse();
    $response->headers->remove('X-Generator');
  }

  public static function getSubscribedEvents()
  {
    $events[KernelEvents::RESPONSE][] = ['HeadersManagerOptions', -10];
    return $events;
  }
}
