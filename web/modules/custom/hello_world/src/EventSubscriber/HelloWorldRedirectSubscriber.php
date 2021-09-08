<?php

namespace Drupal\hello_world\EventSubscriber;

use Drupal\Core\Routing\LocalRedirectResponse;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\Core\Url;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Class HelloWorldRedirectSubscriber
 * @package Drupal\hello_world\EventSubscriber
 *
 * Event subscriber for redirecting to homepage
 * Subcribes to the Kernel Request event and redirects to homepage when the user has 'non_grata' role
 */
class HelloWorldRedirectSubscriber implements EventSubscriberInterface
{
  /**
   * The current user
   * @var Drupal\Core\Session\AccountProxyInterface
   */
  protected $currentUser;

  /**
   * The current route match
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $currentRouteMatch;

  /**
   * HelloWorldRedirectSubscriber constructor.
   * @param AccountProxyInterface $currentUser
   * @param RouteMatchInterface $currentRouteMatch
   */
  public function __construct(AccountProxyInterface  $currentUser, RouteMatchInterface $currentRouteMatch) {
    $this->currentUser = $currentUser;
    $this->currentRouteMatch = $currentRouteMatch;
  }

  /**
   * {@inheritDoc}
   * @return array
   */
  public static function getSubscribedEvents()
  {
    $events[KernelEvents::REQUEST][] = ['onRequest', 0];
    return $events;
  }

  public function onRequest(GetResponseEvent $event) {
    $route_name = $this->currentRouteMatch->getRouteName();

    if ($route_name !== 'hello_world.hello') {
      return;
    }

    $roles = $this->currentUser->getRoles();
    if (in_array('non_grata', $roles)) {
      $url = Url::fromUri('internal:/');
      $event->setResponse(new  LocalRedirectResponse($url->toString()));
    }
  }

}
