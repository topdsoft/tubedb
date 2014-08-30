<?php
App::uses('Box', 'Model');

/**
 * Box Test Case
 *
 */
class BoxTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.box',
		'app.location',
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
		$this->Box = ClassRegistry::init('Box');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Box);

		parent::tearDown();
	}

}
