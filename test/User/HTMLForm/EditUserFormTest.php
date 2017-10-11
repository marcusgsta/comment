<?php


namespace Anax\User\HTMLForm;

 /**
 * HTML Form elements.
 *
 */
class EditUserFormTest extends \PHPUnit_Framework_TestCase
{
    protected $form;
    protected static $di;


    /**
     * Setup user
     */
    public function setUp()
    {
        $this->user = new \Anax\User\User();
        $this->user->setDb(self::$di->get("db"));
        $this->user->acronym = "Ture";
        $this->user->password = "pass";
        $this->user->email = "marcus@hejsan.se";
        $this->user->gravatar = "marcus@hejsan.se";
        $this->user->role = 10;
        $this->user->save();
    }

    protected function tearDown()
    {
        $this->user->delete();
    }

    /**
     * Setup before each testcase
     */
    public static function setUpBeforeClass()
    {
        self::$di = new \Anax\DI\DIFactoryConfig("di-for-testing.php");
    }

    /**
     * Create an EditUserForm object.
     */
    public function testEditUserForm()
    {
        $this->form = new EditUserForm(self::$di, "Ture");
        $this->assertInstanceOf("Anax\User\HTMLForm\EditUserForm", $this->form);
    }

    /**
     * Test callbacksubmit().
     */
    public function testcallbackSubmit()
    {
        $this->form = new EditUserForm(self::$di, "Ture");
        $this->form->callbackSubmit();
    }
}
