<?php
App::uses('Eventype', 'Model');

/**
 * Eventype Test Case
 *
 */
class EventypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eventype',
		'app.event'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Eventype = ClassRegistry::init('Eventype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Eventype);

		parent::tearDown();
	}

}
