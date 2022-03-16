<?php

namespace Drupal\schema_accommodation\Plugin\schema_metatag\PropertyType;

use Drupal\schema_metatag\Plugin\schema_metatag\PropertyTypeBase;

/**
 * Provides a plugin for the 'LocationFeatureSpecification' Schema.org property type.
 *
 * @SchemaPropertyType(
 *   id = "location_feature_specification",
 *   label = @Translation("LocationFeatureSpecification"),
 *   tree_parent = {
 *     "LocationFeatureSpecification",
 *   },
 *   tree_depth = 2,
 *   property_type = "LocationFeatureSpecification",
 *   sub_properties = {
 *     "@type" = {
 *       "id" = "type",
 *       "label" = @Translation("@type"),
 *       "description" = "",
 *     },
 *     "name" = {
 *       "id" = "text",
 *       "label" = @Translation("name"),
 *       "description" = @Translation("Name of the item."),
 *     },
 *     "value" = {
 *       "id" = "boolean",
 *       "label" = @Translation("value"),
 *       "description" = "",
 *     },
 *   },
 * )
 */
class LocationFeatureSpecification extends PropertyTypeBase {

}
