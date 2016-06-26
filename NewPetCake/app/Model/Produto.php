<?php
App::uses('AppModel', 'Model');
/**
 * Produto Model
 *
 * @property Compra $Compra
 */
class Produto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Compra' => array(
			'className' => 'Compra',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
