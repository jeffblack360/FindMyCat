<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');
                
		$this->assertEquals(200, $response->getStatusCode());
	}
	/**
	 * A second basic functional test example.
	 *
	 * @return void
	 */
        public function testBasicExample2()
	{
		$response = $this->call('GET', '/');
                
		$this->assertEquals(200, $response->getStatusCode());
	}

}
