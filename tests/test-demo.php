<?php

namespace UnitTestDemo;

use phpmock\phpunit\PHPMock;

class DemoTest extends \PHPUnit_Framework_TestCase
{
    use PHPMock;

    public function test_demo_get_option()
    {
        $get_option = $this->getFunctionMock('UnitTestDemo', 'get_option');
        $get_option->expects($this->once())
                   ->with($this->equalTo('demo_foo'), $this->identicalTo(null))
                   ->willReturn('bar');

        $this->assertEquals('bar', demo_get_option('foo'));
    }

    public function test_demo_get_option_casts_array()
    {
        $get_option = $this->getFunctionMock('UnitTestDemo', 'get_option');
        $get_option->expects($this->once())
                   ->with($this->equalTo('demo_foo'), $this->identicalTo(array()))
                   ->willReturn('bar');

        $this->assertEquals(array('bar'), demo_get_option('foo', array()));
    }
}

