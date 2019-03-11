<?php namespace App\Tests;


use App\Entity\Formation;


class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
    $entity = new Formation();
    $entity->setLieu('toto');
    
    $this->assertEquals('toto', $entity->getLieu());
    }
}