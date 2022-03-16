<?php

namespace Drupal\schema_accommodation\Plugin\schema_metatag\PropertyType;

use Drupal\schema_metatag\Plugin\schema_metatag\PropertyTypeBase;

/**
 * Provides a plugin for the 'BedDetails' Schema.org property type.
 *
 * @SchemaPropertyType(
 *   id = "bed_details",
 *   label = @Translation("BedDetails"),
 *   tree_parent = {
 *     "BedDetails",
 *   },
 *   tree_depth = 0,
 *   property_type = "BedDetails",
 *   sub_properties = {
 *     "@type" = {
 *       "id" = "type",
 *       "label" = @Translation("@type"),
 *       "description" = "",
 *     },
 *     "numberOfBeds" = {
 *       "id" = "number",
 *       "label" = @Translation("numberOfBeds"),
 *       "description" = "",
 *     },
 *   },
 * )
 */
class BedDetails extends PropertyTypeBase {

}
