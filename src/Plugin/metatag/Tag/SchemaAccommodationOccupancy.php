<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_occupancy' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_occupancy",
 *   label = @Translation("Occupancy"),
 *   description = @Translation(" 	The allowed total occupancy for the accommodation in persons (including infants etc)"),
 *   name = "occupancy",
 *   group = "schema_accommodation",
 *   weight = 0.3,
 *   type = "Occupancy",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   property_type = "quantitative_value",
 *   tree_parent = {
 *     "QuantitativeValue",
 *   },
 *   tree_depth = 0,
 * )
 */
class SchemaAccommodationOccupancy extends SchemaNameBase {

}
