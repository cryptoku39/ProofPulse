<?php
/**
 * Tests for ProofPulse
 */

use PHPUnit\Framework\TestCase;
use Proofpulse\Proofpulse;

class ProofpulseTest extends TestCase {
    private Proofpulse $instance;

    protected function setUp(): void {
        $this->instance = new Proofpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Proofpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
