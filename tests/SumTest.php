<?php

declare(strict_types=1);

namespace OtusPHP\Tests;

use PHPUnit\Framework\TestCase;
use OtusPHP\Sum;

class SumTest extends TestCase
{
    /** @var Sum */
    private $sum;

    protected function setUp()
    {
        $this->sum = new Sum();
    }

    protected function tearDown()
    {
        $this->sum = NULL;
    }

    /**
     * @param $a float
     * @param $b float
     * @param $c float
     *
     * @dataProvider providerSum
     */
    public function testSum($a, $b, $c): void
    {
        $result = $this->sum->sum($a, $b);
        $this->assertEquals($c, $result);
    }

    /**
     * @return array
     */
    public function providerSum(): array
    {
        return array (
            array (2.1, 2, 4.1),
            array (2, 3, 5),
            array (3, 5, 8)
        );
    }
}