<?php

declare(strict_types=1);

namespace Vjik\UnpackingVsForeachBench;

final class A0To50Bench extends ArrayBench
{
    protected function getCountElementsFrom(): int
    {
        return 0;
    }

    protected function getCountElementsTo(): int
    {
        return 50;
    }
}
