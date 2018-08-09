<?php

namespace Ahc\CronBench;

use Cron\CronExpression;

class MtdowlingCronBench extends Common
{
    /**
     * @Revs(500)
     */
    public function benchDueCheck()
    {
        $e = new \Exception('Assertion failed');

        foreach (static::$checks as list($expr, $time, $foo, $expected)) {
            $sut = CronExpression::factory($expr);
            \assert($expected === $sut->isDue($time), $e);
        }
    }
}
