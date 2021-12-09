<?php

namespace Drupal\creating_field_example\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'field_example_text' widget.
 *
 * @FieldWidget(
 *   id = "field_example_text",
 *
 *   label = @Translation("RGB value as #ffffff"),
 *   field_types = {
 *     "field_example_rgb"
 *   }
 * )
 */
class TextWidget extends WidgetBase
{

  /**
   * @param FieldItemListInterface $items
   * @param int $delta
   * @param array $element
   * @param array $form
   * @param FormStateInterface $form_state
   * @return array[]
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state)
  {
    $value = isset($items[$delta]->value) ? $items[$delta]->value : "";
    $element += [
      '#type' => 'textfield',
      '#default_value' => $value,
      '#size' => 7,
      '#maxlength' => 7,
      '#element_validate' => [
        [$this, 'validate'],
      ],
    ];
    return ['value' => $element];
  }

  /**
   * Validate the color text field.
   * @param $element
   * @param FormStateInterface $form_state
   */
  public function validate($element, FormStateInterface $form_state) {
    $value = $element['#value'];
    if(strlen($value) == 0) {
      $form_state->setValueForElement($element, '');
      return;
    }

    if (!preg_match('/^#([a-f0-9]{6})$/iD', strtolower($value))) {
      $form_state->setError($element, t('Color must be 6 digit hexadecimal value which is suitable for CSS'));
    }
  }
}
