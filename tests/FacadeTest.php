<?php
/**
 * Created by PhpStorm.
 * User: Marco Bunge
 * Date: 22.10.2015
 * Time: 16:07
 */

namespace Blast\Tests;


use League\Container\Container;

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var
     */
    private $container;

    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->container = new Container();
    }


}