<?php
App::uses('BoxesTag', 'Model');

/**
 * BoxesTag Test Case
 *
 */
class BoxesTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.boxes_tag',
		'app.box',
		'app.location',
		'app.mtb',
		'app.tag',
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
		$this->BoxesTag = ClassRegistry::init('BoxesTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BoxesTag);

		parent::tearDown();
	}

}
