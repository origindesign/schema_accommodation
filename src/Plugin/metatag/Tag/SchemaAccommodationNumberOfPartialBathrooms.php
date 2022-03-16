<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_number_of_partial_bathrooms' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_number_of_partial_bathrooms",
 *   label = @Translation("numberOfPartialBathrooms"),
 *   description = @Translation("Number of partial bathrooms - The total number of half and ¼ bathrooms in an Accommodation. This corresponds to the BathroomsPartial field in RESO."),
 *   name = "numberOfPartialBathrooms",
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
class SchemaAccommodationNumberOfPartialBathrooms extends SchemaNameBase {

}
