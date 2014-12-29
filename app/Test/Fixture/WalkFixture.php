<?php
/**
 * WalkFixture
 *
 */
class WalkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'horse_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'duration' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin2_general_ci', 'charset' => 'latin2'),
		'details' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin2', 'collate' => 'latin2_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'date' => '2014-02-18',
			'horse_id' => 1,
			'duration' => 'Lorem ipsum dolor sit amet',
			'details' => 1,
			'created' => '2014-02-18 15:49:37',
			'modified' => '2014-02-18 15:49:37'
		),
	);

}
