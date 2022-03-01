<?php

declare(strict_types=1);

namespace Kata\Test;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldBeZeroForEmptyString()
    {
        $Kata = new Kata();

        $result = $Kata->add('');

        $this->assertEquals('0', $result);
    }
    /** 
     * @test 
     */
    public function itShouldBeOne()
    {
        $Kata = new Kata();

        $result = $Kata->add("1");

        $this->assertEquals("1", $result);
    }
    /** 
     * @test 
     */
    public function itShouldBeThree()
    {
        $StringCalculator = new Kata();

        $result = $StringCalculator->add("1,2");

        $this->assertEquals("3", $result);
    }
    /** 
     * @test 
     */
    public function itShouldBeEquals()
    {
        $StringCalculator = new Kata();

        $result = $StringCalculator->add("1,2,3,4");
        
        $this->assertEquals("10", $result);
    }
    /** 
     * @test 
     */
    public function itShouldBeUseTwoDelimiter()
    {
        $StringCalculator = new Kata();

        $result = $StringCalculator->add("1,2\n3");
        
        $this->assertEquals("6", $result);
    }
    /** 
     * @test 
     */
    public function LastPosition()
    {
        $StringCalculator = new Kata();

        $result = $StringCalculator->add("1,2\n");
        
        $this->assertEquals("Number excepted but EOF found", $result);
    }
    

}
