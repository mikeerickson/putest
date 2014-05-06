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

//	function it_should_access_laravel()
//	{
//		var_dump($this->laravel->getEnv());
//	}

	function it_should_access_laravel()
	{
		$value = $this->laravel->app->environment();
	}

}
