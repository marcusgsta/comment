<?php


namespace Anax\User\HTMLForm;

 /**
 * HTML Form elements.
 *
 */
class CreateUserFormTest extends \PHPUnit_Framework_TestCase
{
    protected $form;
    protected static $di;


    /**
     * Setup user
     */
    // public function setUp()
    // {
    //     $this->user = new \Anax\User\User();
    //     $this->user->setDb(self::$di->get("db"));
    //     $this->user->acronym = "Sture";
    //     $this->user->password = "pass";
    //     $this->user->email = "marcus@hejsan.se";
    //     $this->user->gravatar = "marcus@hejsan.se";
    //     $this->user->role = 1;
    //     $this->user->save();
    // }
    //
    // protected function tearDown()
    // {
    //     $this->user->delete();
    // }

    /**
     * Setup before each testcase
     */
    public static function setUpBeforeClass()
    {
        self::$di = new \Anax\DI\DIFactoryConfig("di-for-testing.php");
    }

    /**
     * Create an CreateUserForm object.
     */
    public function testConstruct()
    {
        $this->form = new CreateUserForm(self::$di, "Sten");
        $this->assertInstanceOf("Anax\User\HTMLForm\CreateUserForm", $this->form);
    }

    /**
     * Test callbacksubmit().
     */
    // public function testcallbackSubmit()
    // {
    //     $this->form = new CreateUserForm(self::$di, "Sten");
    //     $this->form->callbackSubmit();
    // }
}
