<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTaskTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
     /**
     * Test pour vérifier la création d'une tâche.
     */
    public function test_can_create_task()
    {
        $response = $this->post('/tasks', [
            'title' => 'Ma nouvelle tâche',
            'detail' => 'Tous les details de ma nouvelle tâche',
        ]);
        $this->assertDatabaseHas('tasks', [
            'title' => 'Ma nouvelle tâche'
        ]);
        $this->get('/tasks')->assertSee('Ma nouvelle tâche');
    }
}
