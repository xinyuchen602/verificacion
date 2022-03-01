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
    public function tieneQueSerCero()
    {
        $Kata = new Kata();

        $result = $Kata->add("");

        $this->assertEquals("0", $result);
    }
    /** 
     * @test 
     */
    public function ValeUno()
    {
        $Kata = new Kata();

        $result = $Kata->add("1");

        $this->assertEquals("1", $result);
    }
    /** 
     * @test 
     */
    public function ValeTres()
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
    /** 
     * @test 
     */
    public function ComprobaSeparateLine()
    {
        $kata = new Kata();

        $result = $kata->separateLine("//;\n1;2");

        $this->assertTrue($result);
    }
    /** 
     * @test 
     */
    public function ComprobaSeparateN()
    {
        $kata = new Kata();

        $result = $kata->separateN("//;\n1;2");

        $this->assertTrue($result);
    }
    /** @test */
    public function CustomSeparator()
    {
        $kata = new Kata();

        $result = $kata->add("//;\n1;2");

        $this->assertEquals("3",$result);
    }
    /** @test */
    public function TestValorNegativo()
    {
        $kata = new Kata();

        $this->setExpectedException(Exception::class);

        $result = $kata->add("-1,2");
    }
    /** @test */
    public function TestMultipleError()
    {
        $kata = new Kata();

        $this->setExpectedException(Exception::class);

        $result = $kata->add("//;\n1;2,-2;");
    }
    /** @test */
    public function TestMultiplicar()
    {
        $kata = new Kata();

        $this->setExpectedException(Exception::class);

        $result = $kata->multi("//;\n1;2");
    }
    /** @test */
    public function TestMultipleErrorMultiplicar()
    {
        $kata = new Kata();

        $this->setExpectedException(Exception::class);

        $result = $kata->multi("//;\n1;2,-2;");
    }

}
