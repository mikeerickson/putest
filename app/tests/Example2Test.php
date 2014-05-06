<?php

class Example2Test extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());

        $this->assertTrue(true);

	}

	/** @test  */
	public function it_should_access_app()
	{
		$value = $this->getEnvironment();
		$this->assertEquals("testing", $value);
	}

	/**
	 * @return string
	 */
	public function getEnvironment()
	{
		$value = App::environment();
		return $value;
	}

}