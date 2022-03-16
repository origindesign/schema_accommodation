<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_pets_allowed' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_pets_allowed",
 *   label = @Translation("petsAllowed"),
 *   description = @Translation("Indicates whether pets are allowed to enter the accommodation."),
 *   name = "petsAllowed",
 *   group = "schema_accommodation",
 *   weight = 0.1,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   property_type = "boolean",
 *   tree_parent = {},
 *   tree_depth = -1,
 * )
 */
class SchemaAccommodationPetsAllowed extends SchemaNameBase {

}
