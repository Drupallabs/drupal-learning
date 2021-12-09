<?php

namespace Drupal\hello_world\Logger;

use Drupal\Core\Logger\RfcLoggerTrait;
use Psr\Log\LoggerInterface;
use Drupal\Core\Logger\LogMessageParserInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Logger\RfcLogLevel;

class MailLogger implements LoggerInterface
{
  use RfcLoggerTrait;

  /**
   * @var \Drupal\Core\Logger\LogMessageParserInterfaceL
   */
  protected $parser;

  /**
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * MailLogger constructor.
   * @param LogMessageParserInterface $parser
   * @param ConfigFactoryInterface $config_factory
   */
  public function __construct(LogMessageParserInterface $parser, ConfigFactoryInterface $config_factory)
  {
    $this->parser = $parser;
    $this->configFactory = $config_factory;
  }

  public function log($level, $message, array $context = [])
  {
    if ($level !== RfcLogLevel::ERROR) {
      return;
    }

    $to = $this->configFactory->get('system.site')->get('mail');
    $langcode = $this->configFactory->get('system.site')->get('langcode');
    $variables = $this->parser->parseMessagePlaceholders($message,$context);
    $markup = new FormattableMarkup($message, $variables);
    \Drupal::service('plugin.manager.mail')->mail('hello_world', 'hello_world_log', $to, $langcode, ['message' => $markup]);
  }
}
