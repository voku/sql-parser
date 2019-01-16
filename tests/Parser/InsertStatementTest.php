<?php
declare(strict_types=1);

namespace PhpMyAdmin\SqlParser\Tests\Parser;

use PhpMyAdmin\SqlParser\Tests\TestCase;

class InsertStatementTest extends TestCase
{
    /**
     * @dataProvider testInsertProvider
     *
     * @param mixed $test
     */
    public function testInsert($test)
    {
        $this->runParserTest($test);
    }

    public function testInsertProvider()
    {
        return [
            ['parser/parseInsert'],
            ['parser/parseInsertSelect'],
            ['parser/parseInsertOnDuplicateKey'],
            ['parser/parseInsertSetOnDuplicateKey'],
            ['parser/parseInsertSelectOnDuplicateKey'],
            ['parser/parseInsertOnDuplicateKeyErr'],
            ['parser/parseInsertErr'],
            ['parser/parseInsertErr2'],
            ['parser/parseInsertIntoErr'],
        ];
    }
}
