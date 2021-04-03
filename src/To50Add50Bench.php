<?php

declare(strict_types=1);

namespace Vjik\UnpackingVsForeachBench;

final class To50Add50Bench extends ArrayBench
{
    protected function getCountElementsFrom(): int
    {
        return 50;
    }

    protected function getCountElementsTo(): int
    {
        return 50;
    }
}
