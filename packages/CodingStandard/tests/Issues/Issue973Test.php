<?php declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Issues;

use Iterator;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;

final class Issue973Test extends AbstractCheckerTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFiles([$file]);
    }

    protected function getCheckerClass(): string
    {
        return LineLengthFixer::class;
    }
    public function provideDataForTest(): Iterator
    {
        yield [__DIR__ . '/Fixture/correct973.php.inc'];
    }
}
