<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Student;

class StudentApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_student()
    {
        $payload = [
            'name' => 'Feature Test',
            'email' => 'feature@example.com',
            'course' => 'BSIT',
        ];

        $response = $this->postJson('/api/students', $payload);

        $response->assertStatus(200)->assertJsonFragment(['email' => 'feature@example.com']);
        $this->assertDatabaseHas('students', ['email' => 'feature@example.com']);
    }

    public function test_can_get_students()
    {
        Student::factory()->create(["email" => "gettest@example.com", "name" => "GetTest", "course" => "BSIT"]);

        $response = $this->getJson('/api/students');

        $response->assertStatus(200)->assertJsonFragment(['email' => 'gettest@example.com']);
    }
}
