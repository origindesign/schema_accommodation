<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_smoking_allowed' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_smoking_allowed",
 *   label = @Translation("smokingAllowed"),
 *   description = @Translation("Indicates whether it is allowed to smoke in the accommodation."),
 *   name = "smokingAllowed",
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
class SchemaAccommodationSmokingAllowed extends SchemaNameBase {

}
