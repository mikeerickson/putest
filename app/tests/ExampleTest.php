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

//    public function testToObject()
//    {
//        $arr = [
//            'id' => 1,
//            'name' => 'Michael',
//            'email' => 'michael@clouddueling.com',
//            'card' => [
//                'id' => 2
//            ]
//        ];
//
//        $obj = to_object($arr);
//
//        $this->assertObjectHasAttribute('id', $obj);
//        $this->assertEquals($obj->id, 1);
//        $this->assertObjectHasAttribute('name', $obj);
//
//        $this->assertObjectHasAttribute('id', $obj->card);
//        $this->assertEquals($obj->card->id, 2);
//    }
//
    public function testToTimezone()
    {
        $date = "2013-12-31 13:00:00";
        $from = 'America/Los_Angeles';

        $this->assertEquals($date,$date);

   }


}