<?php

/*
 * This file is part of the zenstruck/foundry package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Foundry\Tests\Benchmark\ORM;

use Zenstruck\Foundry\Tests\Benchmark\Persistence\GenericFactoryBench;
use Zenstruck\Foundry\Tests\Fixture\Factories\Entity\GenericEntityFactory;

class GenericEntityFactoryBench extends GenericFactoryBench
{
    protected static function factory(): GenericEntityFactory
    {
        return GenericEntityFactory::new();
    }
}
