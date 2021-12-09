<?php

namespace Drupal\hello_world\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GreetingConfigurationForm extends ConfigFormBase
{
  /**
   * @var LoggerChannelInterface
   */
  protected $logger;

  /**
   * GreetingConfigurationForm constructor.
   * @param ConfigFactoryInterface $config_factory. The factory for configuration objects.
   * @param LoggerChannelInterface $logger. The logger.
   */
  public function __construct(ConfigFactoryInterface $config_factory, LoggerChannelInterface $logger)
  {
    parent::__construct($config_factory);
    $this->logger = $logger;
  }

  /**
   * @param ContainerInterface $container
   * @return ConfigFormBase|GreetingConfigurationForm|static
   */
  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('config.factory'),
      $container->get('hello_world.logger.channel.hello_world')
    );
  }

  /**
   * {@inheritDoc}
   */
  protected function getEditableConfigNames() {
    return['hello_world.custom_greeting'];
  }

  /**
   * @return string
   */
  public function getFormId() {
    return 'greeting_configuration_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('hello_world.custom_greeting');

    $form['greeting'] = [
      '#type' => 'text field',
      '#title' => $this->t('Greeting'),
      '#description' => $this->t('Please provide the greeting you want to use.'),
      '#default_value' => $config->get('greeting'),
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('hello_world.custom_greeting')
      ->set('greeting', $form_state->getValue('greeting'))
      ->save();

    parent::submitForm($form, $form_state);
    $this->logger->info('The Hello World greeting has been changed to @message.',['@message' => $form_state->getValue('greeting')]);
  }
}
