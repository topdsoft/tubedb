<?php
App::uses('AppModel', 'Model');
/**
 * Transaction Model
 *
 * @property Tube $Tube
 * @property Box $Box
 * @property Manufacturer $Manufacturer
 */
class Transaction extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tube' => array(
			'className' => 'Tube',
			'foreignKey' => 'tube_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Box' => array(
			'className' => 'Box',
			'foreignKey' => 'box_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Manufacturer' => array(
			'className' => 'Manufacturer',
			'foreignKey' => 'manufacturer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
