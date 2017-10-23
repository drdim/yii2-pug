<?php
/**
 * EscapedFilter.php
 */

namespace drdim\yii\pug\tests\unit\filters;

use Pug\Compiler;
use Pug\Nodes\Filter;
use Pug\Filter\AbstractFilter;

/**
 * Class EscapedFilter
 * @package drdim\yii\pug\tests\unit\filters
 */
class EscapedFilter extends AbstractFilter
{

    public function __invoke(Filter $node, Compiler $compiler)
    {
        $output = [];

        foreach ($node->block->nodes as $line) {
            $output[] = $compiler->interpolate($line->value);
        }

        return htmlentities(implode("\n", $output));
    }
}
