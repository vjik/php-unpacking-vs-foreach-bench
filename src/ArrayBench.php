<?php

declare(strict_types=1);

namespace Vjik\UnpackingVsForeachBench;

/**
 * @Iterations(10)
 * @Revs(1000)
 */
abstract class ArrayBench
{
    private array $data = [];

    public function setData(): void
    {
        $this->data = [
            $this->generateArray($this->getCountElementsFrom()),
            $this->generateArray($this->getCountElementsTo()),
        ];
    }

    abstract protected function getCountElementsFrom(): int;

    abstract protected function getCountElementsTo(): int;

    private function generateArray(int $count): array
    {
        $data = [];
        for ($i = 1; $i <= $count; $i++) {
            $data[] = (string)$i;
        }
        return $data;
    }

    /**
     * @BeforeMethods("setData")
     */
    public function benchUnpacking(): void
    {
        $columns = [...$this->data[0], ...$this->data[1]];
    }

    /**
     * @BeforeMethods("setData")
     */
    public function benchForeach(): void
    {
        $columns = $this->data[0];
        foreach ($this->data[1] as $column) {
            $columns[] = $column;
        }
    }
}
