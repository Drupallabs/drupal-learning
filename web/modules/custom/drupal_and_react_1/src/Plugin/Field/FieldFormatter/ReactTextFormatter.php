<?php

namespace Drupal\drupal_and_react\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldDefinitionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Plugin implementation of the 'Drupal and React' formatter.
 *
 * @FieldFormatter(
 *   id = "drupal_and_react",
 *   label = @Translation("Drupal and React"),
 *   field_types = {
 *     "string"
 *   }
 * )
 */
class ReactTextFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $id = $items->getEntity()->id();

    # Generate a wrapper to use as dom root to attach the React component.
    $field_name = $this->fieldDefinition->getItemDefinition()->getFieldDefinition()->getName();
    $wrapper_id = 'drupal-and-react-app-' . $field_name .'-'. $id;
    $build = [
      '#markup' => '<div id="' . $wrapper_id . '"></div>',
    ];

    # Get field items and values.
    foreach ($items as $delta => $item) {
      $elements[$delta] = $item->value;
    }

    # Attach the React component to the field formatter.
    $build['#attached']['library'] = [
      'drupal_and_react/app_bundle',
    ];

    # Send the required data to the React component via Drupal settings.
    $build['#attached']['drupalSettings']['drupal_and_react_app'][$id] = [
      'id' => $id,
      'wrapper' => $wrapper_id,
      'content' => $elements,
    ];

    return $build;
  }

}
