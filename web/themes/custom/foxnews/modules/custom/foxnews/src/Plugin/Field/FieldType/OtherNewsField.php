<?php

namespace Drupal\foxnews\Plugin\Field\FieldType;


use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
/**
 * Provides a field type of baz.
 * 
 * @FieldType(
 *   id = "Other News Radiobox",
 *   label = @Translation("Other News RadioBox Field"),
 *   default_formatter = "othernews_formatter",
 *   default_widget = "othernews_widget",
 * )
 */

 class OtherNewsField extends FieldItemBase {
    /**
     * {@inheritdoc}
     */
    public static function schema(FieldStorageDefinitionInterface $field_definition) {
      return [
        // columns contains the values that the field will store
        'columns' => [
        // List the values that the field will save. This
        // field will only save a single value, 'value'
        'value' => [
          'type' => 'text',
          'size' => 'tiny',
          'not null' => FALSE,
        ],
      ],
    ];
  }
 }