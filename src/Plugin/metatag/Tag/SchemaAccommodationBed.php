<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_bed' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_bed",
 *   label = @Translation("bed"),
 *   description = @Translation("The number of beds included in the accommodation."),
 *   name = "bed",
 *   group = "schema_accommodation",
 *   weight = 0.2,
 *   type = "bed",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   property_type = "bed_details",
 *   tree_parent = {
 *     "BedDetails",
 *   },
 *   tree_depth = 0,
 * )
 */
class SchemaAccommodationBed extends SchemaNameBase {

}
