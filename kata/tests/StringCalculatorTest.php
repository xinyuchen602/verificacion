<?php

namespace Kata\Test;

use Kata\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldBeZeroForEmptyString()
    {
        $StringCalculator = new StringCalculator();

        $result = $StringCalculator->add('');

        $this->assertEquals(0, $result);
    }

}
