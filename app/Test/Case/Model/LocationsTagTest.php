<?php
App::uses('LocationsTag', 'Model');

/**
 * LocationsTag Test Case
 *
 */
class LocationsTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.locations_tag',
		'app.location',
		'app.box',
		'app.mtb',
		'app.tag',
		'app.boxes_tag',
		'app.tube',
		'app.boxes_tube'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LocationsTag = ClassRegistry::init('LocationsTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LocationsTag);

		parent::tearDown();
	}

}
