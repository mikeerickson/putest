<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */

    public function testBasicExample()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }

    public function testToTimezone()
    {
        $date = "2013-12-31 13:00:00";
        $from = 'America/Los_Angeles';

        $this->assertEquals($date,$date);

   }


}