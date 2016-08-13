<?php
use FastD\Http\Request;

/**
 *
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */
class RequestTest extends PHPUnit_Framework_TestCase
{
    public function testRequest()
    {
        $request = new Request('GET', 'http://www.baidu.com');

        $this->assertEquals('GET', $request->getMethod());

        $request->withMethod('POST');

        $this->assertEquals('POST', $request->getMethod());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidMethod()
    {
        new Request('ABC', 'http://www.baidu.com');
    }
}
