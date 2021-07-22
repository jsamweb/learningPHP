<?php

use PHPUnit\Framework\TestCase;
use App\validate;
class validateTest extends TestCase
{
    // public function test_email()
    // {
    //     $email = validate::email("guebo@guebo.com");
    //     $this->assertTrue($email);
    //     $email = validate::email("guebo@@guebo.com");
    //     $this->assertFalse($email);
    // }
    // public function test_url()
    // {
    //     $url = validate::url("https://xxx.com");
    //     $this->assertTrue($url);
    //     $url = validate::url("guebo@@guebo.com");
    //     $this->assertFalse($url);
    // }
    public function test_password()
    {
        $password  = Validate::password('Abc1234VS');
        $this->assertTrue($password);

        $password  = Validate::password('Abc1w');
        $this->assertFalse($password);
    }
}