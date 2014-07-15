<?php

namespace spec\putest;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TestMeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('putest\TestMe');
    }

	function it_should_calculate_number()
	{
		$this->add(2,2)->shouldReturn(4);
	}
}
