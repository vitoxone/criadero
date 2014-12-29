<?php
App::uses('Walk', 'Model');

/**
 * Walk Test Case
 *
 */
class WalkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.walk',
		'app.horse',
		'app.gender',
		'app.breed',
		'app.type',
		'app.color',
		'app.state',
		'app.event',
		'app.eventype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Walk = ClassRegistry::init('Walk');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Walk);

		parent::tearDown();
	}

}
