<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $users = new User();
        $users->setEmail('ahmed12344@gmail.com');
        $this->assertEquals($users->getEmail(), 'ahmed12344@gmail.com');

    }


}
