<?php


namespace Anax\User\HTMLForm;

 /**
 * HTML Form elements.
 *
 */
class CreateCommentFormTest extends \PHPUnit_Framework_TestCase
{
    protected $form;
    protected static $di;

    /**
     * Setup before each testcase
     */
    public static function setUpBeforeClass()
    {
        self::$di = new \Anax\DI\DIFactoryConfig("di-for-testing.php");
    }

    /**
     * Create an object.
     */
    public function testConstruct()
    {
        $this->form = new \Marcusgsta\Comment\HTMLForm\CreateCommentForm(self::$di);
        $this->assertInstanceOf("Marcusgsta\Comment\HTMLForm\CreateCommentForm", $this->form);
    }
}
