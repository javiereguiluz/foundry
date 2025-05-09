<?php

/*
 * This file is part of the zenstruck/foundry package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Foundry\Tests\Benchmark\Mongo;

use Zenstruck\Foundry\Tests\Benchmark\Persistence\GenericFactoryBench;
use Zenstruck\Foundry\Tests\Fixture\Factories\Document\GenericDocumentFactory;

class GenericDocumentFactoryBench extends GenericFactoryBench
{
    protected static function factory(): GenericDocumentFactory
    {
        return GenericDocumentFactory::new();
    }
}
