<?php

namespace Drupal\schema_accommodation\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_accommodation_amenity_feature' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_accommodation_amenity_feature",
 *   label = @Translation("amenityFeature"),
 *   description = @Translation("An amenity feature (e.g. a characteristic or service) of the Accommodation. "),
 *   name = "amenityFeature",
 *   group = "schema_accommodation",
 *   weight = 0.4,
 *   type = "amenityFeature",
 *   secure = FALSE,
 *   multiple = TRUE,
 *   property_type = "location_feature_specification",
 *   tree_parent = {
 *     "LocationFeatureSpecification",
 *   },
 *   tree_depth = 0,
 * )
 */
class SchemaAccommodationAmenityFeature extends SchemaNameBase {

}
