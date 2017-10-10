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
        $user = new \Anax\User\User;

        $email = "marcusgu@hotmail.com";
        $res = $user->gravatar($email);
        $emailRes = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "&s=" . 40;

        $this->assertEquals($res, $emailRes, "Created gravatar URL missmatch.");
    }
}
