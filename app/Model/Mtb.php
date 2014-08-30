<?php
App::uses('AppModel', 'Model');
/**
 * Mtb Model
 *
 * @property Manufacturer $Manufacturer
 * @property Box $Box
 * @property Tube $Tube
 */
class Mtb extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'mtb';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Manufacturer' => array(
			'className' => 'Manufacturer',
			'foreignKey' => 'manufacturer_id',
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
		'Tube' => array(
			'className' => 'Tube',
			'foreignKey' => 'tube_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
