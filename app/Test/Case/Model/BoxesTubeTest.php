<?php
App::uses('BoxesTube', 'Model');

/**
 * BoxesTube Test Case
 *
 */
class BoxesTubeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.boxes_tube',
		'app.box',
		'app.location',
		'app.mtb',
		'app.tag',
		'app.boxes_tag',
		'app.tube'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BoxesTube = ClassRegistry::init('BoxesTube');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BoxesTube);

		parent::tearDown();
	}

}
