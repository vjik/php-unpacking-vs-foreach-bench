<?php

declare(strict_types=1);

namespace Vjik\UnpackingVsForeachBench;

final class To3Add3Bench extends ArrayBench
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
