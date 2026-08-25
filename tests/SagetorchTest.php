<?php
/**
 * Tests for SageTorch
 */

use PHPUnit\Framework\TestCase;
use Sagetorch\Sagetorch;

class SagetorchTest extends TestCase {
    private Sagetorch $instance;

    protected function setUp(): void {
        $this->instance = new Sagetorch(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sagetorch::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
