<?php
/**
 * Tests for FluxShard
 */

use PHPUnit\Framework\TestCase;
use Fluxshard\Fluxshard;

class FluxshardTest extends TestCase {
    private Fluxshard $instance;

    protected function setUp(): void {
        $this->instance = new Fluxshard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fluxshard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
