<?php
declare(strict_types=1);

namespace PhpMyAdmin\SqlParser\Tests\Parser;

use PhpMyAdmin\SqlParser\Tests\TestCase;

class TransactionStatementTest extends TestCase
{
    /**
     * @dataProvider testTransactionProvider
     *
     * @param mixed $test
     */
    public function testTransaction($test)
    {
        $this->runParserTest($test);
    }

    public function testTransactionProvider()
    {
        return [
            ['parser/parseTransaction'],
            ['parser/parseTransaction2'],
            ['parser/parseTransaction3'],
            ['parser/parseTransactionErr1'],
        ];
    }
}
