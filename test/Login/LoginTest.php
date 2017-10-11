<?php


namespace Anax\LogIn;

 /**
 * Login Test.
 *
 */
class LogInControllerTest extends \PHPUnit_Framework_TestCase
{
    // protected $form;
    protected static $di;
    //public $session;


    /**
     * Setup before each testcase
     */
    public static function setUpBeforeClass()
    {
        self::$di = new \Anax\DI\DIFactoryConfig("di-for-testing.php");
    }

    /**
     * Setup session
     */
    public function setUp()
    {
        // $this->session = new \Anax\Session\Session();
        // $this->session->start();
    }

    public static function tearDownAfterClass()
    {
        // $this->session->destroy();
    }


    public function testIsLoggedIn()
    {
        $this->logInController = new LogInController();
        $this->logInController->setDI(self::$di);
        $acronym = "Ture";
        //$this->loginController->logInUser($acronym);
        // $this->session->set("user", $acronym);
        $this->logInController->logInUser($acronym);

        $this->assertEquals($this->logInController->isLoggedIn($acronym), $acronym);
    }

    // public function testLogOut()
    // {
    //     $this->logInController = new LogInController();
    //     $this->logInController->setDI(self::$di);
    //     $acronym = "Ture";
    //
    //     $this->logInController->logOut($acronym);
    //     $this->assertFalse($this->logInController->isLoggedIn($acronym));
    // }
}
