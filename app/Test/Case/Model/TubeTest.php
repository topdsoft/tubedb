<?php
App::uses('Tube', 'Model');

/**
 * Tube Test Case
 *
 */
class TubeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tube',
		'app.mtb',
		'app.manufacturer',
		'app.box',
		'app.location',
		'app.tag',
		'app.boxes_tag',
		'app.locations_tag',
		'app.tags_tube',
		'app.boxes_tube'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tube = ClassRegistry::init('Tube');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tube);

		parent::tearDown();
	}

}
