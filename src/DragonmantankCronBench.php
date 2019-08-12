<?php

namespace Ahc\CronBench;

use Cron\CronExpression;

/**
 * https://github.com/dragonmantank/cron-expression
 */
class DragonmantankCronBench extends Common
{
    /**
     * @Revs(500)
     * @Iterations(2)
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
