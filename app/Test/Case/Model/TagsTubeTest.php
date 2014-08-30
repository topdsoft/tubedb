<?php
App::uses('TagsTube', 'Model');

/**
 * TagsTube Test Case
 *
 */
class TagsTubeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tags_tube',
		'app.tube',
		'app.tag',
		'app.box',
		'app.location',
		'app.locations_tag',
		'app.mtb',
		'app.manufacturer',
		'app.boxes_tag',
		'app.boxes_tube'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TagsTube = ClassRegistry::init('TagsTube');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TagsTube);

		parent::tearDown();
	}

}
