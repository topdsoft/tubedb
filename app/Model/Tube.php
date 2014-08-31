<?php
App::uses('AppModel', 'Model');
/**
 * Tube Model
 *
 * @property Mtb $Mtb
 * @property Box $Box
 * @property Tag $Tag
 */
class Tube extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $order = 'name';
	public $virtualFields = array(
		'newQty' => 'select sum(newQty) from boxes_tubes where boxes_tubes.tube_id=Tube.id',
		'usedQty' => 'select sum(usedQty) from boxes_tubes where boxes_tubes.tube_id=Tube.id',
		'unknownQty' => 'select sum(unknownQty) from boxes_tubes where boxes_tubes.tube_id=Tube.id',
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Mtb' => array(
			'className' => 'Mtb',
			'foreignKey' => 'tube_id',
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
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'tube_id'
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Box' => array(
			'className' => 'Box',
			'joinTable' => 'boxes_tubes',
			'foreignKey' => 'tube_id',
			'associationForeignKey' => 'box_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Tag' => array(
			'className' => 'Tag',
			'joinTable' => 'tags_tubes',
			'foreignKey' => 'tube_id',
			'associationForeignKey' => 'tag_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
