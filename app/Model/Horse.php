<?php
App::uses('AppModel', 'Model');
/**
 * Horse Model
 *
 * @property Gender $Gender
 * @property Breed $Breed
 * @property Type $Type
 * @property Color $Color
 * @property State $State
 */
class Horse extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Gender' => array(
			'className' => 'Gender',
			'foreignKey' => 'gender_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Breed' => array(
			'className' => 'Breed',
			'foreignKey' => 'breed_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Type' => array(
			'className' => 'Type',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Color' => array(
			'className' => 'Color',
			'foreignKey' => 'color_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

		'ParentHorse' => array(
			'className' => 'Horse',
			'foreignKey' => 'lft',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentHorse' => array(
			'className' => 'Horse',
			'foreignKey' => 'rght',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

	/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'horse_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
			'Walk' => array(
			'className' => 'Walk',
			'foreignKey' => 'horse_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


    function getYears( $birthdate ) {
    	list($Y,$m,$d) = explode("-",$birthdate);
    	return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
	}

}
