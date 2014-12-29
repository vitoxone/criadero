<?php
App::uses('Breed', 'Model');

/**
 * Breed Test Case
 *
 */
class BreedTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.breed',
		'app.horse'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Breed = ClassRegistry::init('Breed');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Breed);

		parent::tearDown();
	}

}
