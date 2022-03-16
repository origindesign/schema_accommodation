<?php

namespace Drupal\Tests\schema_accommodation\Functional;

use Drupal\Tests\schema_metatag\Functional\SchemaMetatagTagsTestBase;

/**
 * Tests that each of the Schema Metatag Accommodation tags work correctly.
 *
 * @group schema_metatag
 * @group schema_accommodation
 */
class SchemaAccommodationTest extends SchemaMetatagTagsTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['schema_accommodation'];

  /**
   * {@inheritdoc}
   */
  public $moduleName = 'schema_accommodation';

  /**
   * {@inheritdoc}
   */
  public $groupName = 'schema_accommodation';

}
