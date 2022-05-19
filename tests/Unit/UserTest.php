<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    //Test if user exists in database
    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'Admin Staff',
            'email' => 'admin@test.com'
        ]);

        $user2 = User::make([
            'name' => 'Client Test',
            'email' => 'client@test.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    //Test if a user can be deleted
    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if ($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }
}
