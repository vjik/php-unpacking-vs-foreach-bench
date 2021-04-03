<?php

declare(strict_types=1);

namespace Vjik\UnpackingVsForeachBench;

final class To0Add3Bench extends ArrayBench
{
    protected function getCountElementsFrom(): int
    {
        return 0;
    }

    protected function getCountElementsTo(): int
    {
        return 3;
    }
}
