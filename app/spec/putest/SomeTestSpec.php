<?php namespace spec\putest;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PhpSpec\Laravel\LaravelObjectBehavior;


class SomeTestSpec extends LaravelObjectBehavior
{
    function it_is_initializable()
    {
		$this->shouldHaveType('putest\SomeTest');
    }

	function it_should_access_laravel()
	{
		$value = $this->laravel->app->environment();
	}

	function it_should_say_hello_world()
	{
		$this->sayHelloWorld()->shouldReturn('Hello World!');
	}

	function it_should_return_testing()
	{
		$this->getEnvironment()->shouldBe('testing');
	}
}
