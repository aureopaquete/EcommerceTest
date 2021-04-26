<?php

    include('vendor/autoload.php');



    use PHPUnit\Framework\TestCase;



    class CalculatorTest extends TestCase{

        public function testSum() {

        $result = 2 + 2;

        $this->assertEquals(4, $result);

    }

}