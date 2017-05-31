<?php

namespace Librinfo\VarietiesBundle\Entity\Test\Unit;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-05-29 at 18:01:12.
 */

use PHPUnit\Framework\TestCase;
use Librinfo\VarietiesBundle\Entity\VarietyDescriptionCulture;


class VarietyDescriptionCultureTest extends TestCase
{
    /**
     * @var VarietyDescriptionCulture
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new VarietyDescriptionCulture;
    /*
    * @todo: uncomment this line
    * $this->object = new VarietyDescriptionCulture;
    */
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Librinfo\VarietiesBundle\Entity\VarietyDescriptionCulture::getFieldset
     * @todo   Implement testGetFieldset().
     */
    public function testGetFieldset()
    {
    $test=$this->object->getFieldset();
    $this->assertEquals($test,'culture');
    }
}