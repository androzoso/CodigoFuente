<?php
App::uses('Follow', 'Model');

/**
 * Follow Test Case
 *
 */
class FollowTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.follow',
		'app.call'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Follow = ClassRegistry::init('Follow');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Follow);

		parent::tearDown();
	}

}
