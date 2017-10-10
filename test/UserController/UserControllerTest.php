<?php

namespace Anax\User;

use \Anax\DI\DIFactoryDefault;
use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use PHPUnit\Framework\TestCase;
/**
 * HTML Form elements.
 *
 */
// class UserControllerTest extends \PHPUnit_Framework_TestCase implements
class UserControllerTest extends TestCase implements
    ConfigureInterface,
    InjectionAwareInterface
{

    use ConfigureTrait,
        InjectionAwareTrait;

    /**
     * Setup before each testcase
     */
    public function setUp()
    {
        $this->di = new DIFactoryDefault();
        //$this->di = new DIForTesting();
    }


    /**
     * Create an object.
     */
    public function testCreate()
    {
        $user = new UserController();
        $this->assertInstanceOf("Anax\User\UserController", $user);
    }

    /**
     * Inject $di.
     */
    public function testInjectDi()
    {
        $user = new UserController();
        $obj = $user->setDI($this->di);
        $this->assertEquals($user, $obj);
    }
}
