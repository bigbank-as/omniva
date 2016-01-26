<?php

namespace Bigbank\Omniva\Test;

use Bigbank\Omniva\Omniva;
use \League\Container\Container;

/**
 * @coversDefaultClass \Bigbank\Omniva\Omniva
 */
class OmnivaTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers ::__construct
     * @covers ::containerFactory
     */
    public function testContainerFactoryInitiatesDiContainer()
    {

        $omniva = new Omniva;
        $this->assertInstanceOf(Container::class, $omniva->getContainer());
    }
}
