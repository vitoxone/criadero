<?php
/**
 * HorseFixture
 *
 */
class HorseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin2_general_ci', 'charset' => 'latin2'),
		'number' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'birthdate' => array('type' => 'date', 'null' => true, 'default' => null),
		'gender_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'breed_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'color_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'state_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin2_general_ci', 'charset' => 'latin2'),
		'image' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin2_general_ci', 'charset' => 'latin2'),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'number' => 1,
			'birthdate' => '2014-02-10',
			'gender_id' => 1,
			'breed_id' => 1,
			'type_id' => 1,
			'color_id' => 1,
			'state_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'image' => 'Lorem ipsum dolor sit amet',
			'lft' => 1,
			'rght' => 1,
			'created' => '2014-02-10 15:27:31',
			'modified' => '2014-02-10 15:27:31'
		),
	);

}
