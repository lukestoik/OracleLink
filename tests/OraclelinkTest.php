<?php
/**
 * Tests for OracleLink
 */

use PHPUnit\Framework\TestCase;
use Oraclelink\Oraclelink;

class OraclelinkTest extends TestCase {
    private Oraclelink $instance;

    protected function setUp(): void {
        $this->instance = new Oraclelink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Oraclelink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
