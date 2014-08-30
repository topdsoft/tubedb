<?php
App::uses('AppModel', 'Model');
/**
 * TagsTube Model
 *
 * @property Tube $Tube
 * @property Tag $Tag
 */
class TagsTube extends AppModel {


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
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
