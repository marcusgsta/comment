<?php


namespace Anax\User\HTMLForm;

 /**
 * HTML Form elements.
 *
 */
class EditCommentFormTest extends \PHPUnit_Framework_TestCase
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
    // public function testConstruct()
    // {
    //     $data['page'] = "index";
    //     $data['commentid'] = 2;
    //
    //     $this->form = new \Marcusgsta\Comment\HTMLForm\EditCommentForm(self::$di, $data);
    //     $this->assertInstanceOf("Marcusgsta\Comment\HTMLForm\EditCommentForm", $this->form);
    // }
}
