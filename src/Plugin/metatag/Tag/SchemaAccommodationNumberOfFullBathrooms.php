<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_number_of_full_bathrooms' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_number_of_full_bathrooms",
 *   label = @Translation("numberOfFullBathrooms"),
 *   description = @Translation("Number of full bathrooms - The total number of full and ¾ bathrooms in an Accommodation. This corresponds to the BathroomsFull field in RESO."),
 *   name = "numberOfFullBathrooms",
 *   group = "schema_accommodation",
 *   weight = 0.25,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   property_type = "number",
 *   tree_parent = {},
 *   tree_depth = 0,
 * )
 */
class SchemaAccommodationNumberOfFullBathrooms extends SchemaNameBase {

}
