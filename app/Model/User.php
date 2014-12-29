<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Gender $Gender
 * @property Careers $Careers
 * @property Role $Role
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/*	public	 $actsAs = array(
        'Notification.Notifiable' => array(
            'subjects' => array('User', 'Message')
        )
    );
*/
	public function beforeSave($options = array()) {
		if(isset($this->data[$this->name]['password'])) {
			$this->data[$this->name]['password'] = AuthComponent::password($this->data[$this->name]['password']);
		}
		return true;
	}


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'numeric' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rut' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'role_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


		var $hasMany = array(
		'User' => array(
			'className' => 'Message',
			'foreignKey' => 'sender_id',
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
			'User' => array(
			'className' => 'Message',
			'foreignKey' => 'receiver_id',
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

	 public $filterArgs = array(
		'filter' => array('type' => 'query', 'method' => 'filterNodes'),
		'role_id' => array('type' => 'value'),
		'active' => array('type' => 'value'),
	);


	 public function filterNodes($data = array()) {
		$conditions = array();
		if (!empty($data['filter'])) {
			$filter = '%' . $data['filter'] . '%';
			$conditions = array(
				'OR' => array(
					$this->alias . '.name LIKE' => $filter,
					$this->alias . '.excerpt LIKE' => $filter,
					$this->alias . '.body LIKE' => $filter,
					$this->alias . '.terms LIKE' => $filter,
				),
			);
		}
		return $conditions;
	}
}
