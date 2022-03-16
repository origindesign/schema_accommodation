<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Group;

use Drupal\schema_metatag\Plugin\metatag\Group\SchemaGroupBase;

/**
 * Provides a plugin for the 'Accommodation' meta tag group.
 *
 * @MetatagGroup(
 *   id = "schema_accommodation",
 *   label = @Translation("Schema.org: Accommodation"),
 *   description = @Translation("See Schema.org definitions for this Schema type at <a href="":url"">:url</a>.", arguments = { ":url" = "https://schema.org/Accommodation"}),
 *   weight = 10,
 * )
 */
class SchemaAccommodation extends SchemaGroupBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
