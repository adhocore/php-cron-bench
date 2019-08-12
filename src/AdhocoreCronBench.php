<?php

namespace Ahc\CronBench;

use Ahc\Cron\Expression;

/**
 * https://github.com/adhocore/php-cron-expr
 */
class AdhocoreCronBench extends Common
{
    /**
     * @Revs(500)
     * @Iterations(2)
     */
    public function benchDueCheck()
    {
        $e = new \Exception('Assertion failed');

        foreach (static::$checks as list($expr, $time, $foo, $expected)) {
            $sut = new Expression;
            \assert($expected === $sut->isCronDue($expr, $time), $e);
        }
    }
}
