<?php

namespace Drupal\regex_checker\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RegExpCheckerTestForm extends FormBase
{
  /**
   * @return string
   */
  public function getFormId(): string
  {
    return 'regexp_checker_form';
  }

  /**
   * @param array $form
   * @param FormStateInterface $form_state
   * @return array
   */
  public function buildForm(array $form, FormStateInterface $form_state): array
  {
    $form['regex_checker_form_about'] = [
      '#type' => 'item',
      '#markup' => $this->t('You can use this form for testing regex')
    ];

    $form['regex_checker_pattern'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Regular Expression'),
      '#description' => $this->t('Write your regular expression'),
      '#cols' => 30,
      '#rows' => 15,
      '#wysiwyg' => FALSE,
      '#prefix' => '<div id="regex_checker_form">',
      '#suffix' => '</div>',
    ];

    $form['regex_checker_input'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Input'),
      '#description' => $this->t('Introduce your string or value for testing'),
      '#cols' => 30,
      '#rows' => 15,
      '#wysiwyg' => FALSE,
      '#prefix' => '<div id="regex_checker_input">',
      '#suffix' => '</div>',
    ];

    $form['regex_checker_result'] = [
      '#type' => 'item',
      '#title' => $this->t('Result zone'),
      '#prefix' => '<div id="regex_checker_final_result">',
      '#suffix' => '</div>',
    ];

    $form['regex_checker_action'] = [
      '#type' => 'button',
      '#value' => $this->t('Check'),
      '#weight' => 5,
      '#prefix' => '<div id="regexp_checker_button">',
      '#suffix' => '</div>',
      '#attached' => [
        'library' => [
          'regex_checker/regex_checker.showing_results',
        ],
      ],
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    // TODO: Implement submitForm() method.
  }
}
