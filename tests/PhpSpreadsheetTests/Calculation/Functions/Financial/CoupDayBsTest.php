<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Financial;

use PhpOffice\PhpSpreadsheet\Calculation\Financial;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PHPUnit\Framework\TestCase;

class CoupDayBsTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerCOUPDAYBS
     *
     * @param mixed $expectedResult
     */
    public function testCOUPDAYBS($expectedResult, ...$args): void
    {
        $result = Financial::COUPDAYBS(...$args);
        self::assertEqualsWithDelta($expectedResult, $result, 1E-8);
    }

    public function providerCOUPDAYBS()
    {
        return require 'tests/data/Calculation/Financial/COUPDAYBS.php';
    }
}
