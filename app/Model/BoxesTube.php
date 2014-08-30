<?php
App::uses('AppModel', 'Model');
/**
 * BoxesTube Model
 *
 * @property Box $Box
 * @property Tube $Tube
 */
class BoxesTube extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
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
