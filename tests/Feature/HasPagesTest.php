<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HasPagesTest extends TestCase
{
    /** @test */
    public function user_can_visit_homepage() {
        // Arrange
        $this->de();
        // Act
        $response = $this->get('/');

        // Assert
        $response->assertStatus(200);
    }
}
