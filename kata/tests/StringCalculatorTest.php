<?php

declare(strict_types=1);

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

        $this->assertEquals('0', $result);
    }
    /** 
     * @test 
     */
    public function itShouldBeOne()
    {
        $StringCalculator = new StringCalculator();

        $result = $StringCalculator->add("1");

        $this->assertEquals("1", $result);
    }
    /** 
     * @test 
     */
    public function itShouldBeThree()
    {
        $StringCalculator = new StringCalculator();

        $result = $StringCalculator->add("1,2");

        $this->assertEquals("3", $result);
    }
    /** 
     * @test 
     */
    public function itShouldBeEquals()
    {
        $StringCalculator = new StringCalculator();

        $result = $StringCalculator->add("1,2,3,4");
        
        $this->assertEquals("10", $result);
    }

}
