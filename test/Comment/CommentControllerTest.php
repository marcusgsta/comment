<?php

namespace Marcusgsta\Comment;

/**
 * CommentController Test
 *
 */
class CommentControllerTest extends \PHPUnit_Framework_TestCase
{
    //protected $form;
    protected static $di;

    /**
     * Setup before each testcase
     */
    public static function setUpBeforeClass()
    {
        self::$di = new \Anax\DI\DIFactoryConfig("di-for-testing.php");
    }


    /**
     * Set up test cases with DI-container
     */
    public function setUp()
    {
        $this->commentController = self::$di->get("commentController");
    }

    public function testgetRole()
    {
        $acronym = "admin";
        $adminRole1 = $this->commentController->getRole($acronym);

        $user = new \Anax\User\User();
        $this->assertInstanceOf("Anax\User\User", $user);

        $user->setDb(self::$di->get("db"));
        $user->find("acronym", "admin");
        $adminRole1 = isset($user->role) ? $user->role : null;

        $adminRole2 = 10;
        $this->assertEquals($adminRole1, $adminRole2);
    }

    /**
    * test getPostCreateComment method
    *
    *
    */
    public function testgetPostCreateComment()
    {
        // $commentController = new \Marcusgsta\Comment\CommentController();
        // $commentController->setDI(self::$di);
        //
        // $commentController->getPostCreateComment();
    }

    /**
    * test getComments method
    *  which gets comments for a certain page,
    * and also checks role
    */
    public function testgetComments()
    {
        $commentController = new \Marcusgsta\Comment\CommentController();
        $commentController->setDI(self::$di);

        $commentController->getComments("test");
    }
}
