<?php

class AlgoTest extends \PHPUnit\Framework\TestCase
{

    public function testAlgo()
    {
        $b = [1,56,56,23,4,98,3,2];
        $count = count($b);
        $iterations = $count - 1;

        foreach ($b as $el) {
            for ($i = 0; $i < $iterations; $i++) {
                $change = false;
                if ($b[$i] > $b[$i + 1]) {
                    $change = true;
                    list($b[$i], $b[$i +1]) = [$b[$i + 1], $b[$i]];
                }
            }
            $iterations--;
            if (!$change) {
                break;
            }
        }

        $this->assertEquals($b, [1,2, 3,4,23,56,56,98]);
    }
}
