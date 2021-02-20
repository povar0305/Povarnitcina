<?php

use Povarnitcina\Solve;
use Povarnitcina\PovarExeption;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SolveTest extends TestCase {

    /**
     * @test
     * @dataProvider providerLin
     */

    public function linTest ($a , $b , $result) {
        $test = new Solve();
        $this->assertEquals( $result, $test->lin($a , $b));
    }

    public function  providerLin() {
        return array (
            array(1,1,[-1]),
            array(10,-2,[0.2]),
        );
    }
    /**
     * @test
     * @dataProvider providerLinException
     */
    public function linTestException($a , $b , $result){
        $this->expectException(PovarExeption::class);
        $test = new Solve();
        $this->assertEquals( $result, $test->lin($a , $b));
    }
    public function  providerLinException() {
        return array (
            array(0,1,-1),
            array(0,0,-1)
        );
    }
}