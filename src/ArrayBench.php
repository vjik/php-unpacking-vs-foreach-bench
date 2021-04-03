<?php

declare(strict_types=1);

namespace Vjik\UnpackingVsForeachBench;

/**
 * @Iterations(10)
 * @Revs(1000)
 */
abstract class ArrayBench
{
    private array $array = [];
    private array $add = [];

    public function setData(): void
    {
        $this->array = $this->generateArray($this->getCountElementsFrom());
        $this->add = $this->generateArray($this->getCountElementsTo());
    }

    abstract protected function getCountElementsFrom(): int;

    abstract protected function getCountElementsTo(): int;

    private function generateArray(int $count): array
    {
        $array = [];
        for ($i = 1; $i <= $count; $i++) {
            $array[] = (string)$i;
        }
        return $array;
    }

    /**
     * @BeforeMethods("setData")
     */
    public function benchUnpacking(): void
    {
        $array = $this->array;
        $array = [...$array, ...$this->add];
    }

    /**
     * @BeforeMethods("setData")
     */
    public function benchForeach(): void
    {
        $array = $this->array;
        foreach ($this->add as $item) {
            $array[] = $item;
        }
    }
}
