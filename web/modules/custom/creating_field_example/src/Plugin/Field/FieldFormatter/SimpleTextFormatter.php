<?php

namespace Drupal\creating_field_example\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'field_example_simple_text' formatter.
 *
 * @FieldFormatter(
 *   id = "field_example_simple_text",
 *
 *   label = @Translation("Simple text formatter"),
 *   field_types = {
 *     "field_example_rgb"
 *   }
 * )
 */
class SimpleTextFormatter extends FormatterBase
{

  /**
   * @param FieldItemListInterface $items
   * @param string $langcode
   * @return array
   */
  public function viewElements(FieldItemListInterface $items, $langcode): array
  {
    $elements = [];
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        // creating a render array to produce the desired markup
        // <p style='color: #hexcolor'> The color code... #hexcolor</p>
        // see theme_html_tag()
        '#type' => 'html_tag',
        '#tag' => 'p',
        '#attributes' => [
          'style' => 'color: ' . $item->value,
        ],
        '#value' => $this->t('the color code in this filed is @code', ['@code' => $item->value]),
      ];
    }
    return $elements;
  }
}
