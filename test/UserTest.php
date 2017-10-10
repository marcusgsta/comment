<?php
namespace Anax\User;

use PHPUnit\Framework\TestCase;
/**
 * HTML Form elements.
 *
 */
class UserTest extends TestCase
{

    /**
     * Test
     *
     * @return void
     *
     */
    public function testgravatar()
    {
        $el = new \Anax\User\User;

        $email = "marcusgu@hotmail.com";
        $res = $el->gravatar($email);
        $emailRes = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "&s=" . 40;

        $exp = 'test';
        $this->assertEquals($res, $emailRes, "Created gravatar URL missmatch.");
    }
}
