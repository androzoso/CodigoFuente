<?php
/**
 * FollowFixture
 *
 */
class FollowFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'dificultades' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 70, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fortalezas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'formacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'importancia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'viabilidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'preguntas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha' => array('type' => 'date', 'null' => true, 'default' => null),
		'call_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_follow_calls1_idx' => array('column' => 'call_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'dificultades' => 'Lorem ipsum dolor sit amet',
			'fortalezas' => 'Lorem ipsum dolor sit amet',
			'formacion' => 'Lorem ipsum dolor sit amet',
			'importancia' => 'Lorem ipsum dolor sit amet',
			'viabilidad' => 'Lorem ipsum dolor sit amet',
			'preguntas' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2014-11-12',
			'call_id' => 1
		),
	);

}
