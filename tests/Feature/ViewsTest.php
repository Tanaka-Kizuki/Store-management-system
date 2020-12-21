<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class ViewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    public function testExample()
    {
        //
        // 指定のviewファイルが表示されているかテスト
        //

        $response = $this->get('/');
        $response->assertViewIs('welcome');

        //以降ログイン状態のみアクセス可能
        $user = factory(User::class)->create();
        $this->actingAs($user);
        
        $response = $this->get('/home');
        $response->assertViewIs('app.home');
        $response->assertViewHas('user');

        $response = $this->get('/time');
        $response->assertViewIs('time.index');
        $response->assertViewHas('times');

        $response = $this->get('/communication');
        $response->assertViewIs('communication.index');
        $response->assertViewIs('time');

        $response = $this->get('/order');
        $response->assertViewIs('order.index');
        $response->assertViewIs('item');
    }
}
