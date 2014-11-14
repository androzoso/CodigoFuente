<?php
/**
 * QuestionFixture
 *
 */
class QuestionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idpregunta' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'categoria' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'edad' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'correo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pregunta' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 144, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'respuesta' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 144, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idpregunta', 'unique' => 1),
			'fk_questions_area1_idx' => array('column' => 'area_id', 'unique' => 0)
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
			'idpregunta' => 1,
			'categoria' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'edad' => 1,
			'correo' => 'Lorem ipsum dolor sit amet',
			'pregunta' => 'Lorem ipsum dolor sit amet',
			'respuesta' => 'Lorem ipsum dolor sit amet',
			'area_id' => 1
		),
	);

}
