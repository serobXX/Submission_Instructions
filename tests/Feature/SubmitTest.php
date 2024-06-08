<?php

namespace Tests\Feature;

use Tests\TestCase;

class SubmitTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_submit_endpoint(): void
    {
        $response = $this->postJson('/api/submit', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.'
        ]);

        $response
            ->assertStatus(200)
            ->assertJson(['message' => 'Submission received and is being processed.']);
    }
}
