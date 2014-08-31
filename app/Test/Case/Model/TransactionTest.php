<?php
App::uses('Transaction', 'Model');

/**
 * Transaction Test Case
 *
 */
class TransactionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transaction',
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
		$this->Transaction = ClassRegistry::init('Transaction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transaction);

		parent::tearDown();
	}

}
