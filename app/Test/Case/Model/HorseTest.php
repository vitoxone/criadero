<?php
App::uses('Horse', 'Model');

/**
 * Horse Test Case
 *
 */
class HorseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.horse',
		'app.gender',
		'app.breed',
		'app.type',
		'app.color',
		'app.state'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Horse = ClassRegistry::init('Horse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Horse);

		parent::tearDown();
	}

}
