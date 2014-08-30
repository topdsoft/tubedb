<?php
App::uses('Mtb', 'Model');

/**
 * Mtb Test Case
 *
 */
class MtbTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mtb',
		'app.manufacturer',
		'app.box',
		'app.location',
		'app.tag',
		'app.locations_tag',
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
		$this->Mtb = ClassRegistry::init('Mtb');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mtb);

		parent::tearDown();
	}

}
