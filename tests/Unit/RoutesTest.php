<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Models\User;
use Database\Factories\ManagerFactory;
use Database\Factories\StaffFactory;

class RoutesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_client_can_register()
    {
        $response = $this->get('register');

        $response->assertStatus(200);
    }
    public function test_client_will_be_redirected_to_register()
    {
        $response = $this->get('home');

        $response->assertRedirect('/login');
    }
    public function test_clients_can_view_profile()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/client-profile');
        $response->assertStatus(200);
    }
    public function test_clients_can_view_previous_payments()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/client-payment-history');
        $response->assertStatus(200);
    }

    public function test_clients_can_not_view_staff_dashboard()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/staff-dashboard');
        $response->assertStatus(302);
    }
    public function test_clients_can_not_view_other_clients()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/staff-client-table');
        $response->assertStatus(302);
    }
    public function test_clients_can_not_view_other_payments()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/staff-credit-recovery-table');
        $response->assertStatus(302);
    }
    public function test_clients_can_not_view_manager_dashboard()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/manager-dashboard');
        $response->assertStatus(302);
    }
    public function test_clients_can_not_view_staff_data()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/manager-users-table');
        $response->assertStatus(302);
    }
    public function test_clients_can_not_view_approvals()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/manager-approval-table');
        $response->assertStatus(302);
    }
}
