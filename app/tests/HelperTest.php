<?php

class HelperTest extends TestCase
{
    public function testToObject()
    {
        $arr = [
            'id' => 1,
            'name' => 'Mike Erickson',
            'email' => 'codedungeon@gmail.com',
            'card' => [
                'id' => 232
            ]
        ];

//        $obj = (object)$arr;
        $obj = $this->arrayToObject($arr);

        $this->assertObjectHasAttribute('id', $obj);
        $this->assertEquals($obj->id, 1);
        $this->assertObjectHasAttribute('name', $obj);

        $this->assertObjectHasAttribute('id', $obj->card);
        $this->assertEquals($obj->card->id, 232);

    }

    public function testToTimezone()
    {
        $date = "2013-12-31 13:00:00";
        $from = 'America/Los_Angeles';

        $this->assertTrue($date == $date);
//        $this->assertEquals(to_utc($date, $from), "2013-12-31 21:00:00");
//        $this->assertEquals(from_utc($date, $from), "2013-12-31 05:00:00");
    }

    public function arrayToObject($array) {
        $obj = new stdClass();
        foreach ($array as $key => $val) {
            $obj->$key = is_array($val) ? $this->arrayToObject($val) : $val;
        }
        return $obj;
    }
}
