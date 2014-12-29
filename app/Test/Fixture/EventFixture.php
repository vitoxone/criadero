<?php
/**
 * EventFixture
 *
 */
class EventFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'eventype_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'horse_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'detail' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin2_general_ci', 'charset' => 'latin2'),
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
			'date' => '2014-02-12',
			'eventype_id' => 1,
			'horse_id' => 1,
			'detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
