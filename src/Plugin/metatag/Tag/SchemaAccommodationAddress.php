<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_address' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_address",
 *   label = @Translation("address"),
 *   description = @Translation("Physical address of the place."),
 *   name = "address",
 *   group = "schema_accommodation",
 *   weight = 1,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   property_type = "postal_address",
 *   tree_parent = {
 *     "PostalAddress",
 *   },
 *   tree_depth = 0,
 * )
 */
class SchemaAccommodationAddress extends SchemaNameBase {

}
