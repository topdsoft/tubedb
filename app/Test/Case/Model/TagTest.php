<?php
App::uses('Tag', 'Model');

/**
 * Tag Test Case
 *
 */
class TagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tag',
		'app.box',
		'app.location',
		'app.locations_tag',
		'app.mtb',
		'app.manufacturer',
		'app.tube',
		'app.boxes_tag',
		'app.boxes_tube',
		'app.tags_tube'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tag = ClassRegistry::init('Tag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tag);

		parent::tearDown();
	}

}
