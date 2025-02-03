<?php

declare(strict_types=1);

namespace tests\http;

use App\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function test_get_uri()
    {

        $_SERVER['REQUEST_URI'] = "abc";
        $server_test = new Request();
        $this->assertSame("abc", $server_test->uri());
    }
}
