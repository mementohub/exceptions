<?php

namespace iMemento\Exceptions;

use PHPUnit\Framework\TestCase;

/**
 * @covers Client
 */
class ExceptionTest extends TestCase
{

    public function test_exception_is_thrown() 
    {
        $this->expectException(ResourceException::class);

        throw new ResourceException('Test');
    }

    public function test_exception_has_uuid()
    {
        try {
            throw new ResourceException('Test');
        } catch (Exception $e) {
            $this->assertStringMatchesFormat('%s-%s-%s-%s-%s', $e->getId());
        }
    }

    public function test_exception_has_debug()
    {
        try {
            throw new ResourceException('Test', ['debug data']);
        } catch (Exception $e) {
            $this->assertNotNull($e->getDebug());
        }
    }
    
}