<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_geo' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_geo",
 *   label = @Translation("geo"),
 *   description = @Translation("Geographic coordinates of the place."),
 *   name = "geo",
 *   group = "schema_accommodation",
 *   weight = 1,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   property_type = "geo_coordinates",
 *   tree_parent = {
 *     "GeoCoordinates",
 *   },
 *   tree_depth = 0,
 * )
 */
class SchemaAccommodationGeo extends SchemaNameBase {

}
