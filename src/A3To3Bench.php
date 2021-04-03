<?php

declare(strict_types=1);

namespace Vjik\UnpackingVsForeachBench;

final class A3To3Bench extends ArrayBench
{
    protected function getCountElementsFrom(): int
    {
        return 3;
    }

    protected function getCountElementsTo(): int
    {
        return 3;
    }
}
