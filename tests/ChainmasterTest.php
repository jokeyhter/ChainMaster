<?php
/**
 * Tests for ChainMaster
 */

use PHPUnit\Framework\TestCase;
use Chainmaster\Chainmaster;

class ChainmasterTest extends TestCase {
    private Chainmaster $instance;

    protected function setUp(): void {
        $this->instance = new Chainmaster(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainmaster::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
