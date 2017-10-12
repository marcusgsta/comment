<?php


namespace Anax\User\HTMLForm;

 /**
 * HTML Form elements.
 *
 */
class UserLogInFormTest extends \PHPUnit_Framework_TestCase
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
    //     $this->user->id = 999;
    //     $this->user->role = 1;
    //     $this->user->save();
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
        $this->form = new \Anax\User\HTMLForm\UserLogInForm(self::$di);
        $this->assertInstanceOf("Anax\User\HTMLForm\UserLogInForm", $this->form);
    }

    /**
     * Test callbacksubmit().
     */
    // public function testGetAllItems()
    // {
    //     $user = new \Anax\User\User();
    //     $user->setDb(self::$di->get("db"));
    //     $allUsers = $user->findAll();
    //
    //     $users = ["-1" => "Select an item..."];
    //     foreach ($allUsers as $obj) {
    //         $users[$obj->id] = "{$obj->acronym} ({$obj->id})";
    //     }
    //
    //     $form = new DeleteUserForm(self::$di);
    //     // $form->getAllItems();
    //     $this->assertEquals($form->getAllItems(), $users);
    // }

    /**
     * Test callbacksubmit().
     */
    // public function testcallbackSubmit()
    // {
    //     $this->form = new DeleteUserForm(self::$di);
    //     $this->form->callbackSubmit();
    // }

    // protected function tearDown()
    // {
    //     $this->user->delete();
    // }
}
