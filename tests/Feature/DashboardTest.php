<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_dashboard_page_displayed(): void
    {
        //ユーザーをんランダムに取得
        $user = User::inRandomOrder()->first();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/cockpit/dashboard');

        $response->assertStatus(200);
        $response->assertSee('ダッシュボード');
    }
}
